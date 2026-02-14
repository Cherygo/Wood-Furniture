<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FurnitureController extends Controller
{
    public function index(Request $request)
    {
        $furniture = DB::table('furniture')
            ->when($request->category, function ($q, $category) {
                return $q->where('category', $category);
            })
            ->when($request->min_price, function ($q, $min_price) {
                return $q->where('price', '>=', $min_price);
            })
            ->when($request->max_price, function ($q, $max_price) {
                return $q->where('price', '<=', $max_price);
            })
            ->when($request->sort_price, function ($q, $sort_price) {
               $direction = $sort_price === 'high_low' ? 'desc' : 'asc';
               return $q->orderBy('price', $direction);
            }, function($q){
                return $q->latest();
            })
            ->paginate(16)
            ->withQueryString();

        $categories = DB::table('furniture')
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return Inertia::render('cat/index', [
            'furniture' => $furniture,
            'categories' => $categories,
            'filters' => $request->only('category', 'min_price', 'max_price', 'sort_price'),
        ]);
    }

    public static function getXLatestItems(int $amount) : object
    {
            $furniture = DB::table('furniture')
                ->latest('id')
                ->limit($amount)
                ->get();
            return $furniture;
    }
}
