<?php

namespace App\Http\Controllers;
use Cart;
use App\Bill;
use App\Billdetail;
use App\Variation;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeOrder(Request $req){
        $listproductname = [];
        $i = 0;
    	$bill = new Bill;
    	$bill->customer_id = null;
    	$bill->email = $req->email;
    	$bill->ho = $req->ho;
    	$bill->ten = $req->ten;
    	$bill->diachi = $req->diachi;
    	$bill->dienthoai = $req->dienthoai;
    	$bill->save();
    	foreach(Cart::content() as $key => $value){
    		$billdetail = new Billdetail;
    		$billdetail->bill_id = $bill->id;
    		$billdetail->variation_id = $value->id;
    		$billdetail->soluong = $value->qty;
    		$billdetail->save();
            $productid = Variation::where('id',$billdetail->variation_id)->first()->product_id;
            //dd($productid);
            $listproductname[$i] = Product::where('id',$productid)->first()->tensanpham;

            $i++;
    	}
        //dd($listproductname);
    	Cart::destroy();
    	$listbilldetail = Billdetail::with('variation')->where('bill_id',$bill->id)->get();
    	//$variation = Variation::with('product')->where('id',$billdetail->variation_id)->first();
    	//dd($listbilldetail);
    	//Cart::store('username');
    	//$content = Cart::restore('username');
    	return view('pages.dathangthanhcong',compact('bill','listbilldetail','listproductname'));
    }
}
