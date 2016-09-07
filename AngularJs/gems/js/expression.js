/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('expressionExample', [])
.controller('ExampleController', ['$scope',function($scope) {
  var exprs = $scope.exprs = [];
  this.expr = '3*10|currency';
  this.first_name = 'Leela';
  this.last_name = 'Krsihna';

  $scope.expr = '3*10|currency';
  $scope.addExp = function(expr) {
    exprs.push(expr);
  };

  $scope.removeExp = function(index) {
    exprs.splice(index, 1);
  };
}]);

//angular.module('expressionExample', [])
//.controller('ExampleController', ['$scope', function($scope) {
//  var exprs = $scope.exprs = [];
//  $scope.expr = '3*10|currency';
//  $scope.addExp = function(expr) {
//    exprs.push(expr);
//  };
//
//  $scope.removeExp = function(index) {
//    exprs.splice(index, 1);
//  };
//}]);