<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\support\facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        // $products = DB::table('products')->get();
        return $products;
        // dd($products);

        return view('products.index');
    }

    public function create()
    {
        return 'this is the form to create a product from CONTROLLER';
    }

    public function store()
    {
    }

    public function show($product)
    {
        // $products = DB::table('products')->where('id', $product)->get();
        $product = product::findFail($product);
        // $products = DB::table('products')->find($product);
        dd($product);

        return view('products.show');
    }
}