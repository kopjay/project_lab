<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
        ->with('product', Product::all());
    }

    public function registerPage(){

        return view('register');
    }

    public function loginPage(){
        
        return view('login');
    }

    public function allProductGaming(){

        return view('gaming-product')
        ->with('product', Product::all());
    }

    public function allProductSport(){

        return view('sport-product')
        ->with('product', Product::all());
    }

    public function allProductCamera(){

        return view('camera-product')
        ->with('product', Product::all());
    }

    public function detailProduct(){

        return view('user-detail-product')
        ->with('product', Product::all());
    }

    public function searchProduct(){

        return view('search-product')
        ->with('product', Product::all());
    }

    public function adminHome(){

        return view('home-admin')
        ->with('product', Product::all());
    }

    public function manageProduct(){

        return view('manage-product')
        ->with('product', Product::all());
    }

    public function addProduct(){

        return view('add-product');
    }

    public function profile(){

        return view('profile');
    }

    public function cart(){

        return view('cart')
        ->with('product', Product::all());
    }

    public function history(){

        return view('history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
