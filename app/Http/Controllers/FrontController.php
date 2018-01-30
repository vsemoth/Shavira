<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class FrontController extends Controller
{
    //create index function

    public function index()
    {
    	# return view
        $shirts = Product::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('front.home', compact('shirts'));
    }

    //create products' function

    public function shirts()
    {
        # return view
        $shirts = Product::all();
        return view('front.shirts', compact('shirts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShirt()
    {
            $products = Product::all();
            $product2 = array();
            foreach ($products as $product) {
            $product2[$product->description] = $product->price;
            }
            return view('front.shirt')->withShirt($product2)->withProducts($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $shirt = Product::find($id);

            return view('front.shirt',compact('shirt'));
    }

    public function shirt()
    {
    }
}
