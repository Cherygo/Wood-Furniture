<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FurnitureController extends Controller
{
    public static function takeXLatestItems(int $amount) : object
    {
            $furniture = DB::table('furniture')
                ->latest('id')
                ->limit($amount)
                ->get();
            return $furniture;
    }
}
