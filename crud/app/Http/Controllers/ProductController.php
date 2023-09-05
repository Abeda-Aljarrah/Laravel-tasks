<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('Products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $data = new Product();
        $data->name = $request->input('name');
        $data->price= $request->input('price');
        $data->description = $request->input('description');	 
        $data->image= $request->input('image');	 
        $data->save();

        return redirect('Products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $products = Product::find($id);
        // return view('Products.show')->with('products', $products);
        $products = Product::all();

        return view('Products.show', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Products.edit', [
            'data' => Product::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =Product::where('id', $id);
        $data->name = $request->input('name');
        $data->price= $request->input('price');
        $data->description = $request->input('description');	 
        $data->image= $request->input('image');

        $data->update($request->except(['_token', '_method']));
        return redirect('Products');

        // $product = Product::find($id);
        // $input = $request->all();
        // $product->update($input);
        // return redirect('Products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('Products')->with('message', 'Product has been Deleted');
    }
}
