<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
   public function dashboard()
   {
      $product = Product::all();
      return view('admin.dashboard',['data'=>$product]);
   }
}
