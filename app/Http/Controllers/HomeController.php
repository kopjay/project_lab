<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home')
        ->with('product', Product::all());
    }

    public function productCategory($category){

        $product = Product::where('category', $category)->paginate(10);
        return view('product-category', compact('product'));

    }

    public function detailProduct(){

        return view('user-detail-product')
        ->with('product', Product::all());
    }

    public function searchProduct(Request $request){

        $product = Product::where('product_name','like',"%".$request->product."%")->paginate(10);
        return view('search-product', compact('product'));
    }

    public function product($id){

        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }

}
