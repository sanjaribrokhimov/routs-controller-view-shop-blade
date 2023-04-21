<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function catigories(){
        return view('catigories');
    }
    public function product($product=null){
        return view('product',['product'=>$product]);
    }
    public function category($category=null){
        return view('category',['category'=>$category]);
    }
}
