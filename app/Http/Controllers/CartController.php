<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\OrderDetails;
use File;
use App\Order;

class CartController extends Controller


{
	    public function index () {

      
       $cart_details = Cart::all();


        $error["status"] = 200;
        $error["message"] = 'success';

         $arr = array('data' => $cart_details, 'error' => $error);

        echo json_encode($cart_details);

   }


	public function show ($id) {

      
       $cart_details = Cart::where('id',$id)->get();

        $error["status"] = 200;
        $error["message"] = 'success';

         $arr = array('data' => $cart_details, 'error' => $error);

        echo json_encode($cart_details);

	}

    
    public function store (Request $request) {
    
       $cartdetails = new OrderDetails;

       $serializedArr = serialize($request->all());

       $cartdetails->items = $serializedArr;

       $cartdetails->save();

       return 'Cart Details successfully created with id ' .$cartdetails->id;


    }

    public function cartDetails () {

      $stuffs = OrderDetails::all();

         foreach ($stuffs as $stuff) {

         $cartdetails = unserialize($stuff->items);
 
      }
     
         $arr = array('data' => $cartdetails);
         echo json_encode($arr);

    }

}
