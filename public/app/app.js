var app = angular.module('winescommercepro', ['ui.router','LocalStorageModule']);
  
//API URL
app.constant('API_URL', 'http://localhost:8000/api/v1/cart');

//Service to get and set Cart Details
app.service('CartDetails', function (localStorageService) {
   
    var Cart = localStorageService.get('items');
    var Qnty = [];
    var TotalBt = localStorageService.get('total');
    var TotalCart = localStorageService.get('totalcart');

    return {
       getCart: function() {
            return Cart;
        },
        setCart: function(value) {
            Cart = value;
        },

        getQnty: function() {
            return Qnty;
        },
        setgetQnty: function(value) {
            Qnty = value;
        },
        
        getTotalBt: function() {
            return TotalBt;
        },
        setTotalBt: function(value) {
           TotalBt = value;

        }, getTotalCart: function() {
            return TotalCart;
        },
           setTotalCart: function(value) {
           TotalCart = value;
        }

     }
});

//Configure localStorage to save 

app.config(function(localStorageServiceProvider){
     localStorageServiceProvider
        .setPrefix('winescommercepro')
        .setStorageType('sessionStorage')
        .setNotify(true, true);
});

// Setting up State Provider for routing

app.config(function($stateProvider, $urlRouterProvider,localStorageServiceProvider) {

    $stateProvider

    .state('default', {
	     controller: 'cartController',
	     templateUrl: 'app/cart/cart.html',
	     url:'/home'
    })
      .state("home", {
            url: "/home",
            cache: false,
            templateUrl: "app/cart/cart.html"
    })
    
 });      