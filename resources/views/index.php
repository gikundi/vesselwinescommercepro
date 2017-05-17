<!DOCTYPE html>
<html lang="en-US" ng-app="winescommercepro">
    <head>
        <title>Vessel Wines</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">

          <!-- Load Main CSS-->
         <link href="<?= asset('css/main.css') ?>" rel="stylesheet">

            </head>
    <body>

       <!-- Load Application Views -->
    
      <div class="container content">
      <ui-view><ui-view>
      
      </div>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        <script src="<?= asset('bower_components/angular-ui-router/release/angular-ui-router.js')?>"></script>
        <script src="<?= asset('bower_components/angular-local-storage/dist/angular-local-storage.min.js')?>"></script>

        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/cart/cartController.js') ?>"></script>
        
    </body>
</html>