<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title="dmm";
        return view('products.index',compact('title'));
    }
}
