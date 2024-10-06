<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // VIEW CONTROLLERS
   public function dashboard(){
        return view('dashboard');
   }

   public function orders(){
        return view('orders');
   }

   public function product(){
        return view('product');
   }

   public function salesReport(){
        return view('salesReport');
   }

   public function customers(){
        return view('customers');
   }

   public function messages(){
        return view('messages');
   }


   // ORDERS CONTROLLER
   public function viewOrder(){
        return view('orders_components.view');
   }

   public function editOrder(){
        return redirect(route('view.orders'))
        ->with('edit','Order Status Updated!');
   }

   // PRODUCT CONTROLLER
   public function editProduct(){
        return redirect(route('view.product'))
        ->with('edit','Product Information Updated!');
   }

   // CUSTOMER CONTROLLER
   public function viewProfile(){
        return view('customers_components.profile');
   }
}