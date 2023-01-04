<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Product;
use App\Models\Cart;
use App\Models\History;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home')
        ->with('product', Product::all());
    }

    public function adminHome(){

        return view('home-admin')
        ->with('product', Product::all());
    }

    public function manageProduct(){

        $product = Product::paginate(10);
        return view('manage-product', compact('product'));
    }

    public function searchManageProduct(Request $request){

        $product = Product::where('product_name','like',"%".$request->search."%")->paginate(10);
        return view('manage-product', compact('product'));
    }

    public function addProduct(){

        return view('add-product');
    }

    public function storeProduct(Request $request)
    {

        $data = new \App\Models\Product();
            $data->product_name = $request->input('product_name');
            $data->detail = $request->input('detail');
            $data->price = $request->input('price');
            $data->category = $request->input('category');
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(1,1000).".".$ext;
            $file->move('uploads/file',$newName);
            $data->photo = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function editProduct($id){

        $product = Product::findOrFail($id);
        return view('edit-product', compact('product'));
    }

    public function updateProduct(Request $request)
    {
        $data = \App\Models\Product::find(Request()->input('id'));
            $data->product_name = $request->input('product_name');
            $data->detail = $request->input('detail');
            $data->price = $request->input('price');
            $data->category = $request->input('category');
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $ext = $file->getClientOriginalExtension();
                $newName = rand(1,1000).".".$ext;
                $file->move('uploads/file',$newName);
                $data->photo = $newName;
            }
            
        $data->save();

      return redirect('manage-product')->with('msg', 'Data Pejabat berhasil diperbaharui');
    }

    public function destroyProduct($id)
    {
        Product::destroy($id);
        Cart::where('product_id', $id)->delete();

        return redirect()->back();
    }

    public function addCart(Request $request)
    {

        $data = new \App\Models\Cart();
            $data->user_id = $request->input('user_id');
            $data->product_id = $request->input('product_id');
            $data->quantity = $request->input('quantity');
        $data->save();

        return redirect('cart')->with('success', 'Data berhasil dibuat');
    }

    public function destroyCart($id)
    {
        Cart::destroy($id);

        return redirect()->back();
    }

    public function profile(){

        return view('profile');
    }

    public function cart(){
        $data = Auth::user()->cart;
        
        return view('cart', compact('data'));
    }

    public function checkout(Request $request)
    {
        $date = Carbon::now();
        $formatedDate = $date->format('Y-m-d H:i:s');
        
        $data = Request()->validate([
          'user_id' => 'required',
        ]);

        $task = Cart::where('user_id', Request()->input('user_id'))->get();

        $idHistory = History::create([
            'user_id' => $data['user_id'],
            'order_date' => $formatedDate,
        ]);
        
        $insertedId = $idHistory->id;

        foreach($task as $la) {
            $idla = $la->id;
  
            Order::create([
              'history_id' => $insertedId,
              'product_name' => Product::findOrFail($la->product_id)->product_name,
              'product_price' => Product::findOrFail($la->product_id)->price,
              'quantity' => $la->quantity,
            ]);
  
        }
        // $teetime_ids is a collection of 1 or more primary keys
        Cart::destroy($task);

      return redirect('history')->with('success', 'Data berhasil');
    }

    public function history(){

        $data = History::where('user_id', Auth::user()->id)->get();
        return view('history', compact('data'));
    }
}
