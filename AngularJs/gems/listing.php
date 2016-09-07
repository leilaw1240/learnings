<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gems | Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap/dist/css/bootstrap.min.css" >
        <script src="js/angular.min.js"></script>
        <script src="js/listing.js"></script>
    </head>
    <body ng-app="Listing">
        <ul class="list-group" ng-controller="ListingController as listings">
            <li class="list-group-item" ng-repeat="list in listings.products track by $index | " ng-click="listDetail(list.id)" >
                <h3>
                    {{list.name}}
                    <em class="pull-right">{{list.price | currency }}</em>
                    <img ng-src="{{list.images[0].large}}" width="150px" >
                    <img ng-src="{{list.images[0].thumb}}" width="150px" >
                </h3>
            </li>
        </ul>
    </body>
</html>
