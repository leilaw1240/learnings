<!DOCTYPE html>
<html ng-app="gemStore">
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/e1.js"></script>
  </head>
  <body class="list-group" ng-controller="StoreController as store">
    <header>
      <h1 class="text-center">Flatlander Crafted Gems</h1>
      <h2 class="text-center">– an Angular store –</h2>
    </header>
    <div class="list-group-item" ng-repeat="product in store.products">
      <h3>
        {{product.name}}
        <em class="pull-right">{{product.price | currency}}</em>
      </h3>

      <!-- Image Gallery  -->
      <div class='gallery' ng-show="product.images.length" ng-controller="GalleryController as gallery">
          <img ng-src="{{product.images[gallery.current]}}" width="200" height="200" />
        <ul class="list-inline thumbs">
            <li class="thumbnail" ng-repeat="image in product.images track by $index" ng-click="gallery.setCurrent($index)">
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
        </div>
      </section>
    </div>
  </body>
</html>
