<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\OrderDetails;
use File;
use Illuminate\Support\Facades\Input;
use App\Order;

class CartController extends Controller

{
    //Function to Get all shopping List items

       public function index () {
        
        $cart_details = Cart::all();
        $error["status"] = 200;
        $error["message"] = 'success';
        $arr = array('data' => $cart_details, 'error' => $error);
        echo json_encode($cart_details);

   }


   //Function to Get a pecific shopping List item

    public function show ($id) {

       $cart_details = Cart::where('id',$id)->get();
       $error["status"] = 200;
       $error["message"] = 'success';
       $arr = array('data' => $cart_details, 'error' => $error);
       echo json_encode($cart_details);

  }

    //Function to save cart items
    
    public function store (Request $request) {
    
       $cartdetails = new OrderDetails;
       $serializedArr = serialize($request->all());
       $cartdetails->items = $serializedArr;
       $cartdetails->save();
       return 'Cart Details successfully created with id ' .$cartdetails->id;

    }
    
    //Function to retrieveview  shopping List item saved in the database by id

    public function cartDetails (Request $request) {

      $id = $request->get('id'); 
    
      $stuffs = OrderDetails::where('id',$id)->get();
      foreach ($stuffs as $stuff) {
        $cartdetails = unserialize($stuff->items);
       }
         $arr = array('cart items' => $cartdetails);
         echo json_encode($arr);

    }

}
