<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()    
    {
        //store data from products table from db to variable $products
        $products= Product::get();
        //use compact to passs variable 'products' to view 'index'
        return view('index', compact('products'));
    } 
    
}
