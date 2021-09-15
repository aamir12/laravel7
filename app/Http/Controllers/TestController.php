<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
      return view('home');
    }

    public function register()
    {
      return 'register';
    }

    public function login()
    {
      return 'login';
    }

    public function productId($id)
    {
      return view('products.single',['id'=>$id]);
    }

    public function product()
    {
        $product = ['name' => 'IPhone7','price' => '$780'];
        return view('products.detail',compact('product'));
    }

    public function createProduct()
    {
        return view('products.create');
    }

    public function storeProduct(Request $request)
    {
        //dd($request->all());
        //dd($request->title);
        //dd($request->get('title'));
        //without Request $request: using helper function request
        dd(request('title'));
    }
}

