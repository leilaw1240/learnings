<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="gemStore">
    <head>
        <title>Gems | Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap/dist/css/bootstrap.min.css" >
        <script src="js/angular.min.js"></script>
        <script src="js/listing.js"></script>
    </head>
     <body class="container" ng-controller="StoreController as store">
    <div class="product row" ng-repeat="product in store.products">
      <h3>
        {{product.name}}
        <em class="pull-right">${{product.price}}</em>
      </h3>
    </div>
  </body>
</html>

 

