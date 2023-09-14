<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;



class UserController extends Controller
{
    public function dashboard()
    {
        $product = Product::all();
        $countofCartItems = $this->countOfcartItems();
        return view('user.dashboard',['data'=>$product,'cartno'=>$countofCartItems]);
    }


   public function viewProduct($id)
   {
      $data =  $this->getProduct($id);

      return view('viewproduct',['data'=>$data]);
   }

   public function getProduct($id)
   {
       return  Product::find($id);
   }

   public function addtocart(Request $req, $id)
   {

      if($req->session()->has('userID'))
      {
     
        $cart = new Cart;

        $cart->productID = $id;
        $cart->userID = session('userID');
        $insert  = $cart->save();
        if($insert)
        {
            return response()->json([
                'status'=>200,
                'data' => "Addtocart successfully"
            ]);
        }
        else{
            return response()->json([
                'status'=>400,
                'data'=>'failed'
            ]);
        }

      }
      else{
        redirect('/');
      }


      
   }

   static function countOfcartItems()
   {
    return Cart::where('userID',session('userID'))->count();
    
   }

   public function logout()
   {

    if (Session::has('userID')) {


        Session::flush();
    }

    return redirect('/');

   }


   public function getuserCart($userID)
   {
    $data = Cart::join('products','products.id','=','carts.productID')
    ->select('carts.id','carts.qty','carts.created_at','products.name','products.price','products.category','products.gallery','products.description')
    ->where('carts.userID',$userID)
    ->get();

    return $data;
    

   }

   public function listcart()
   {

    $cartdata = $this->getuserCart(session('userID'));

    return view('user.cartlist',['data'=>$cartdata]);

   }
}
