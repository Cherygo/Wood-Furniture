<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        if(!$user) {
            return redirect()->route('login');
        }

        $cartItems = $user->cartItems()
            ->whereHas('furniture')
            ->with('furniture')
            ->get();

        $subtotal = $cartItems->sum(function($item) {
           return $item->furniture->price;
        });

       return Inertia::render('cart/index', ['cartItems' => $cartItems, 'subtotal' => $subtotal]);
    }

    public function add(Request $request)
    {
        $user = auth()->user();
        if(!$user) {
            return redirect()->route('login');
        }
        $furnitureId = $request->input('furniture_id');

        $cartItem = Cart::where('user_id', $user->id)
            ->where('furniture_id', $furnitureId)
            ->first();

        if($cartItem) {
//            var_dump($cartItem);
//            die();
            throw ValidationException::withMessages(['cart' => 'Item already in cart']);
        } else {
            Cart::create([
                'user_id' => $user->id,
                'furniture_id' => $furnitureId
            ]);
        }

        return back()->with('success', 'Item added to cart');
    }

    public function destroy($id)
    {
        Cart::where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();
        return back()->with('success', 'Item removed from cart');
    }
}
