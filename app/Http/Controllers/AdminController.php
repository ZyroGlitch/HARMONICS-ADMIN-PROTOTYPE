<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // VIEW CONTROLLERS
    public function login(){
        return view('login');
   }

   public function register(){
        return view('register');
   }

   public function loaders(){
        return view('loader');
   }
   
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



   // LOGIN AUTHENTICATION CONTROLLER
   public function loginAuth(){
          $existEmail = 'admin@gmail.com';
          $existPassword = 'admin123';

          if($existEmail == request('email') && $existPassword == request('password')){
               return redirect(route('view.loaders'));
          }else{
               return redirect(route('view.login'))
               ->with('error','Incorrect email or password!');
          }
   }

   // REGISTER CONTROLLER
   public function registerAccount(){
          return redirect(route('view.loaders'));
   }

   // FORGOT PASSWORD CONTROLLER
   public function forgotPassword(){
          return redirect(route('view.login'))
          ->with('resetPass','Password Successfully Updated.');
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