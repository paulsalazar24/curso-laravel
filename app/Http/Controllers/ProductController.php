<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\support\facades\DB;

class ProductController extends Controller
{

    public function index()
    {


        return view('products.index')->with([
            'productos' => Product::paginate(9),
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:available, unavailable'],
        ];

        request()->validate($rules);


        if (request()->status == 'available' && request()->stock == 0) {
            session()->flash('error', 'If available must stock');

            return redirect()
                ->back()
                ->withInput(request()->all());
        }

        // session()->forget('error');

        // $product = Product::create([
        //     'title' => request()->title,
        //     'description' => request()->description,
        //     'price' => request()->price,
        //     'stock' => request()->stock,
        //     'status' => request()->status,
        // ]);
        $product = Product::create(request()->all());
        session()->flash('success', "the new product with id {$product->id} was created");

        return redirect()->route('products.index');
    }

    public function show($product)
    {
        // $products = DB::table('products')->where('id', $product)->get();
        $product = product::findOrFail($product);
        // $product = DB::table('products')->find($product);
        // dd($product);

        return view('products.show')->with([
            'product' => $product,
            // 'html' => "<h2>subtitle</h2>",

        ]);
    }

    public function edit($product)
    {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product),
        ]);
    }

    public function update($product)
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:available, unavailable'],
        ];

        request()->validate($rules);


        $product = Product::findOrFail($product);

        $product->update(request()->all());

        return redirect()->route('products.index');
    }


    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();
        return redirect()->route('products.index');
    }
}