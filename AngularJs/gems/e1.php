<!DOCTYPE html>
<html ng-app="gemStore">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script type="text/javascript" src="js/e1.js"></script>
        <style>
            .thumb_product_active{ border : 2px solid red;}
            .ng-invalid{ border-color:red;}
            .ng-valid{ border-color:green;}
        </style>
    </head>
    <body class="list-group" ng-controller="StoreController as store">
        <header>
            <h1 class="text-center">Flatlander Crafted Gems</h1>
            <h2 class="text-center">– an Angular store –</h2>
        </header>
        <div class="container">
            <div class="row list-group">
               <div class="list-group-item" ng-repeat="product in store.products">
                        <h3>
                            {{product.name}}
                            <em class="pull-right">{{product.price| currency}}</em>
                        </h3>

                        <!-- Image Gallery  -->
                        <div class='gallery' ng-show="product.images.length" ng-controller="GalleryController as gallery">
                            <img ng-src="{{product.images[gallery.current]}}" width="200" height="200" />
                            <ul class="list-inline thumbs">
                                <li class="thumbnail" ng-class="{thumb_product_active: gallery.current == $index }" ng-repeat="image in product.images track by $index" ng-click="gallery.setCurrent($index)">
                                    <img ng-src="{{image}}" width="75" height="75" />
                                </li>
                            </ul>
                            
                            
                        </div>

                        <section class="tab" ng-controller="TabController as tab">
                            <ul class="nav nav-pills">
                                <li ng-class="{ active: tab.isSet(1) }">
                                    <a href ng-click="tab.setTab(1)">Description</a></li>
                                <li ng-class="{ active: tab.isSet(2) }">
                                    <a href ng-click="tab.setTab(2)">Specs</a></li>
                                <li ng-class="{ active: tab.isSet(3) }">
                                    <a href ng-click="tab.setTab(3)">Reviews</a></li>
                            </ul>
                            <div ng-show="tab.isSet(1)">
                                <h4>Description</h4>
                                <blockquote>{{product.description}}</blockquote>
                            </div>
                            <div ng-show="tab.isSet(2)">
                                <h4>Specs</h4>
                                <blockquote>Shine: {{product.shine}}</blockquote>
                            </div>
                            <div ng-show="tab.isSet(3)">
                                <h4>Reviews</h4>
                                
                                <blockquote ng-repeat="prod_review in product.reviews">
                                    <strong>{{prod_review.stars}} Stars</strong>
                                    {{prod_review.body}}
                                    <cite class="clearfix">—{{prod_review.author}} on {{prod_review.createdOn | date }} </cite>
                                </blockquote>
                                
                                <form name="reviewForm" ng-controller="ReviewController as reviewCtrl" ng-submit="reviewForm.$valid && reviewCtrl.addReview(product)" novalidate="true">
                                <h4>Preview</h4>
                                <!--  Live Preview -->
                                <blockquote >
                                    <strong>{{reviewCtrl.review.stars}} Stars</strong>
                                    {{reviewCtrl.review.body}}
                                    <cite class="clearfix">—{{reviewCtrl.review.author}} on {{reviewCtrl.review.createdOn | date }} </cite>
                                </blockquote>

                                <!--  Review Form -->
                                <h4>Submit a Review</h4>
                                <fieldset class="form-group">
                                    <select ng-model="reviewCtrl.review.stars" required="true" class="form-control" ng-options="stars for stars in [5,4,3,2,1]" title="Stars">
                                        <option value>Rate the Product</option>
                                    </select>
                                </fieldset>
                                <fieldset class="form-group">
                                    <textarea ng-model="reviewCtrl.review.body" class="form-control" placeholder="Write a short review of the product..." title="Review"></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <input ng-model="reviewCtrl.review.author" required="true" type="email" class="form-control" placeholder="jimmyDean@example.org" title="Email" />
                                </fieldset>
                                <fieldset class="form-group">
                                    <input type="submit" class="btn btn-primary pull-right" value="Submit Review" />
                                </fieldset>
                            </form>
                            </div>
                        </section>
                    </div>

            </div>
        </div>
    </body>
</html>
