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
        return "showing the form to edit the product with id {$product}";
    }
}