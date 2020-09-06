<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductTab extends Controller
{
    public function RenderTab($category_id){
    	$product = Product::with('category')->with('variation')->where('category_id',$category_id)->get();
    	//dd($product);
    	return view('pages.producttab', compact('product'));
    }
}

