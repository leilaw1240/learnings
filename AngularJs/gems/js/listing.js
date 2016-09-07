/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module('Listing', [])
.controller('ListingController', ['$scope', function($scope) { 
        this.products  = [{"id":"PROD001","name":"Product1","price":10,"description":"description1","images":[{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"},{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"}]},{"id":"PROD002","name":"Product2","price":20,"description":"description2","images":[{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"},{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"}]},{"id":"PROD003","name":"Product3","price":30,"description":"description3","images":[{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"},{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"}]},{"id":"PROD004","name":"Product4","price":40,"description":"description4","images":[{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"},{"large":"http:\/\/mediafiles.allaboutsymbian.com\/808\/zeiss\/g.jpg","thumb":"http:\/\/www.freedigitalphotos.net\/images\/img\/homepage\/87357.jpg"}]}];
        $scope.listDetail = function(prodcut_id){
            alert(prodcut_id);
        }
}]);