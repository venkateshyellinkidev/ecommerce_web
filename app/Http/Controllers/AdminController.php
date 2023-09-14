<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
   public function dashboard()
   {
      $product = Product::all();
      return view('admin.dashboard', ['data' => $product]);
   }

   public function viewProduct($id)
   {
      $data =  $this->getProduct($id);

      return view('viewproduct', ['data' => $data]);
   }

   public function getProduct($id)
   {
      return  Product::find($id);
   }

   public function addtocart($id)
   {

      $product = $this->getProduct($id);
   }

   public function logout()
   {

      if (Session::has('userID')) {


         Session::flush();
      }

      return redirect('/');
   }
}
