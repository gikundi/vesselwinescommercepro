app.controller('cartController', function($scope, $http, API_URL,CartDetails,localStorageService) {

// Initialize Cart 
$scope.cart = [];


//Set Cart Items after page is reloaded
$scope.cartdetailsitems = localStorageService.get('items');

// Fetch shopping list items on the front page
$http.get(API_URL)
            .success(function(response) {
                $scope.shoppinglist = response;
               
            });

//Filter Shopping List Items
$scope.search=function(searchparam){

        $scope.searchQuery = angular.copy(searchparam);
        $scope.shoppinglistToFilter=$scope.shoppinglist;
        $scope.searchReasult=true;

 }

// Add Item to Cart
  $scope.addItem = function(item,bottle_qnty,case_qnty) {


    $scope.bottle_qnty = bottle_qnty;
    $scope.year = item.year;
    $scope.brand = item.wine_brand;

    var match = getMatchedCartItem(item);
    if (match) {
      match.count += 1;
      return;
    }
    var itemToAdd = angular.copy(item);
    itemToAdd.count = 1;
    
    //$scope.cart.push(itemToAdd);
    $scope.cart.push({

      'image':item.image,
      'wine_brand':item.wine_brand,
      'year':item.year,
      'bottle_amount':item.bottle_amount,
      'case_amount':item.case_amount,
      'bottle_qnty' :bottle_qnty,
      'case_qnty' :case_qnty });

    //Set cart 
    CartDetails.setCart($scope.cart);

    // Save Cart Items Locally
    $scope.saveCartItemsLocally();


    //Sget Items when an item is added to cart
    $scope.cartdetailsitems = localStorageService.get('items');
    
    // get current Bottle count NO
    $currentno = $scope.getTotalBottles();

     // Save Total Bottle Count Locally
    $scope.saveTotalBottlesLocally($currentno);

     // get current total count
    $totalamount = $scope.getTotal();

      // Save Total amount  Locally
    $scope.saveTotalAmountLocally($totalamount);

    alert('Item added to cart successfully Checkout to confirm order and Save');

  }

// Remove Item from Cart
 $scope.deleteItem = function(item) {

    var cart = $scope.cartdetailsitems;
    var match = getMatchedCartItem(item);
    if (match.count > 1) {
      match.count -= 1;
      return;
    }
    cart.splice(cart.indexOf(item), 1);

    localStorageService.set('items',cart);

    $scope.getTotalBottles();

    alert('Item removed from cart suceesfully');

  }

// Get Total No of Bottles added 
  $scope.getTotalBottles = function(){


    var total = CartDetails.getTotalBt();

    if(!total){

     var total = 0;
    }

    for(var i = 0; i < $scope.cart.length; i++){
        var product = $scope.cart[i];
      
        total += (product.bottle_qnty);

    }
    
    return total;
}

// Get Total value after calculation 
 $scope.getTotal = function(){
    
   var totalCart = CartDetails.getTotalCart();

    if(!totalCart){

     var totalCart = 0;
    }

    for(var i = 0; i < $scope.cart.length; i++){
        var product = $scope.cart[i];
       // console.log("Bottle Value",product.bottle_qnty);
       if(!product.case_qnty){

        product.case_qnty =0;
       }

       totalCart += ((product.bottle_qnty * product.bottle_amount)+(product.case_qnty *product.case_amount));
        
       // console.log("Bottle Total",total);
    }
    return Math.round(totalCart, 2);
}

// Save Cart Details to the database

  $scope.addDetails = function() {

   console.log("Save Cart Items");

   $scope.items = localStorageService.get('items');

   console.log($scope.items);

   $http({ method: "POST", 
            url: API_URL, 
            data: $scope.items, 
            cache: false }).
            success(function(response) {
            $scope.message = response;
            alert($scope.message);
     });

  $scope.clearCart();


 }

// Clear Cart 
$scope.clearCart = function(item) {
    
    $scope.cart = [];
    $scope.items =[];
    $scope.cartdetailsitems = [];
    $scope.bottle_qnty = '';
    $scope.year = '';
    $scope.brand = '';
    $scope.getTotalBottles();
    localStorageService.remove('items');
    localStorageService.remove('total');
    localStorageService.remove('totalcart');
    alert('Cart Items cleared successfully');

  }


$scope.saveTotalBottlesLocally = function ($currentno) {

  localStorageService.set('total',$currentno);

  console.log('Total Bottles added to local storage', localStorageService.get('total') );

  }

$scope.saveTotalAmountLocally = function ($totalamount) {

  localStorageService.set('totalcart',$totalamount);

  console.log('Total amount Added locally', localStorageService.get('totalcart') );

  }

$scope.saveCartItemsLocally = function () {

       // Get Cart items from CartDetails Service
    $scope.cartitems = CartDetails.getCart();

    localStorageService.set('items', $scope.cartitems);

  }

  function getMatchedCartItem(item) {

      var cart = $scope.cart;
      return $scope.cart.find(function(itm) {
      return itm.id === item.id
    });

  }

 if (!Array.prototype.find) {
  Array.prototype.find = function(predicate) {
    if (this == null) {
      throw new TypeError('Array.prototype.find called on null or undefined');
    }
    if (typeof predicate !== 'function') {
      throw new TypeError('predicate must be a function');
    }
    var list = Object(this);
    var length = list.length >>> 0;
    var thisArg = arguments[1];
    var value;

    for (var i = 0; i < length; i++) {
      value = list[i];
      if (predicate.call(thisArg, value, i, list)) {
        return value;
      }
    }
    return undefined;
  };
}

});