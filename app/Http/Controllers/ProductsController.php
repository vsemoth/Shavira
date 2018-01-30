<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

        //validation

        $this->validate($request,[
            'name' => 'Required',
            'size' => 'Required',
            'image' => 'image|mimes:png,jpg,jpeg|max:1000000'
        ]);

        //image upload

        $image = $request->image;

        if ($image) {
            # code...
            $imageName=$image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image']=$imageName;
        }

        Product::create($formInput);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //select product
        $shirt = Product::find($id);
        return view('front.product.show',compact('shirt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::pluck('name','id');
        $product = Product::find($id);
        return view('admin.product.edit', compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $formInput=$request->except('image');

        //validation

        $this->validate($request,[
            'name' => 'Required',
            'size' => 'Required',
            'image' => 'image|mimes:png,jpg,jpeg|max:1000000'
        ]);

        //image upload

        $image = $request->image;

        if ($image) {
            # code...
            $imageName=$image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image']=$imageName;
        }

        Product::create($formInput);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);

        $product->delete();

        return back();
    }
}
