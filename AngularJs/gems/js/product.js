
console.log('Product Module Initiated...!');
var app = angular.module('product-module', []);

app.controller('TabController', function () {
    this.tab = 1;

    this.setTab = function (newValue) {
        this.tab = newValue;
    };

    this.isSet = function (tabName) {
        return this.tab === tabName;
    };
});

app.controller('GalleryController', function () {
    this.current = 0;
    this.setCurrent = function (newGallery) {
        this.current = newGallery || 0;
    };
    this.isActive = function (item) {
        return item == this.current;
    };

});

app.controller("ReviewController", function () {

    this.review = {};

    this.addReview = function (product) {
        this.review.createdOn = Date.now();
        product.reviews.push(this.review);
        this.review = {};
    };
});

app.directive('productTitle', function () {
    return {
        'restrict': 'A',
        'templateUrl': 'product-title.html'
    }
});

app.directive('productTabs', function () {
    return {
        restrict: 'E',
        templateUrl: 'product-tabs.html',
        controller: 'TabController',
        controllerAs: 'tab'
    }
});

app.directive('productGallery', function () {
    return {
        restrict: 'E',
        templateUrl: 'product-gallery.html',
        controller: 'GalleryController',
        controllerAs: 'gallery'
    }
});
