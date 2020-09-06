<?php

namespace App\Http\Controllers;
use Cart;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;
//use Illuminate\Support\Facades\Auth;
//use Input;
use Validator;
use App\Category;
use App\Product;
use App\Variation;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class PageController extends Controller
{
    public function getHomepage(){
        $listcategory = Category::all();
        $firstcategory = $listcategory->first()->id;
        $listproduct = Product::with('category')->with('variation')->where('category_id',$firstcategory)->get();
    	return view('pages.homepage',compact('listcategory','listproduct'));
    }

    public function getBlogdetails(){
    	return view('pages.blog-details');
    }

    public function getBlog(){
    	return view('pages.blog');
    }

    public function getCheckout(){
        return view('pages.check-out',[
         'productincart' => Cart::content(),
         'tongsoluong' => Cart::count(),
         'tonggia' => Cart::subtotal()
        ]);
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function getFaq(){
    	return view('pages.faq');
    }

    public function getLogin(){
    	return view('pages.login');
    }

    public function postLogin(LoginRequest $request){
        $validated = $request->validated();
        //dd($validated);
        $credentials = array('email'=>$request->email,'matkhau'=>$request->matkhau);
        if(Auth::attempt($credentials)){
            dd('thanhcong');
        } else {
            return redirect()->back()->with(['message'=>'Đăng nhập không thành công']);
        }
    }

    public function getProduct(Request $req){
        $listcategory = Category::all();
        $listvariation = Variation::where('product_id',$req->id)->get();
        $firstsize = $listvariation->first()->kichco;
        $firstcolor = $listvariation->first()->mausac;
        $firstprice = $listvariation->first()->gia;
        $firstvariation = Variation::where('product_id',$req->id)->first();
        $req->Session()->put('idvariation',$firstvariation->id);
        //dd($firstprice);
        $product = Product::with('category')->where('id',$req->id)->first();
    	return view('pages.product',compact('product','listcategory','listvariation','firstsize','firstcolor','firstprice','firstvariation'));
    }

    public function getRegister(){
    	return view('pages.register');
    }

    public function postRegister(RegisterRequest $request){
        $validated = $request->validated();
        if($validated!=null){
                $customer = new Customer;
                $customer->ho = $request->ho;
                $customer->ten = $request->ten;
                $customer->diachi = $request->diachi;
                $customer->dienthoai = $request->dienthoai;
                $customer->email = $request->email;
                $customer->matkhau = Hash::make($request->matkhau);
                $customer->save();
                return view('pages.dangkythanhcong');
        }
    }

    public function getShop(){
        $listcategory = Category::all();
        $listproduct = Product::with('category')->with('variation')->get();
        //$firstprice = Product::with('variation')->where->first();
    	return view('pages.shop',compact('listcategory','listproduct'));
    }

    public function getCategory(Request $req){
        $listcategory = Category::all();
        $listproductbycategory = Product::where('category_id',$req->id)->with('category')->with('variation')->get();
        //$firstprice = Product::with('variation')->where->first();
        return view('pages.category',compact('listcategory','listproductbycategory'));
    }

    public function getShoppingcart(){
        return view('pages.shopping-cart',[
         'productincart' => Cart::content(),
         'tongsoluong' => Cart::count(),
         'tonggia' => Cart::subtotal()
        ]);
    }
}
