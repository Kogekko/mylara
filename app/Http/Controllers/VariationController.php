<?php

namespace App\Http\Controllers;
use App\Variation;
use Illuminate\Http\Request;
use Session;

class VariationController extends Controller
{
    public function RenderColor($product_id, $size){
    	$variationbysize = Variation::where([
    		['product_id',$product_id],
    		['kichco',$size]
    	])->get();
    	//dd($variationbysize);
    	return view('pages.colortab', compact('variationbysize'));
    }

    public function RenderPrice(Request $req,$product_id,$color,$size){
    	$price = Variation::where([
    		['product_id',$product_id],
    		['mausac',$color],
    		['kichco',$size]
    	])->first()->gia;

        $idvariation = Variation::where([
            ['product_id',$product_id],
            ['mausac',$color],
            ['kichco',$size]
        ])->first()->id;

        $req->Session()->put('idvariation',$idvariation);
    	//dd($price);
    	//$price = 300;
    	//print_r($color);
    	return view('pages.pricetab', compact('price','idvariation'));
    }
}
