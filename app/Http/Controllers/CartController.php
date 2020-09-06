<?php

namespace App\Http\Controllers;
use Cart;
use Session;
use App\Variation;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddCart($id){
  		$variation = Variation::with('product')->where('id',$id)->first(); 
      $add = Cart::add(['id' => $variation->id, 'name' => $variation->product->tensanpham,
        'qty' => 1, 'price' => $variation->gia,
      'options' =>[
        'hinhanh' => $variation->product->hinhanh,
        'kichco' => $variation->kichco,
        'mausac' => $variation->mausac,
        ]]);

      if($add){
       return view('pages.cart',[
         'productincart' => Cart::content(),
         'tongsoluong' => Cart::count(),
         'tonggia' => Cart::subtotal()
       ]);
     }
    }

    public function AddCartProductPage(Request $req,$id,$soluong){


        $variation = Variation::with('product')->where('id',Session::get('idvariation'))->first();
       

      $add = Cart::add(['id' => $variation->id, 'name' => $variation->product->tensanpham,
        'qty' => $soluong, 'price' => $variation->gia,
      'options' =>[
        'hinhanh' => $variation->product->hinhanh,
        'kichco' => $variation->kichco,
        'mausac' => $variation->mausac,
        ]]);
      if($add){
       return view('pages.cart',[
         'productincart' => Cart::content(),
         'tongsoluong' => Cart::count(),
         'tonggia' => Cart::subtotal()
       ]);
      }
    }

    public function RemoveCart($rowId){
      Cart::remove($rowId);
      // if(Cart::count()==0){
      //   Cart::destroy();
      // }
      //return view('pages.cart');
       return view('pages.cart',[
         'productincart' => Cart::content(),
         'tongsoluong' => Cart::count(),
         'tonggia' => Cart::subtotal()
       ]);
    }

    public function UpdateAllItemListCart(Request $req){
      foreach($req->data as $item){
          Cart::update($item["key"],$item["value"]);
      }
      return view('pages.render-shopping-cart',[
       'productincart' => Cart::content(),
       'tongsoluong' => Cart::count(),
       'tonggia' => Cart::subtotal()
      ]);
    }
}
