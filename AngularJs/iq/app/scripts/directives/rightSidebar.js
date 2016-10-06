'use strict';

/**
 * @ngdoc directive
 * @name interview.directive:rightSidebar
 * @description
 * # rightSidebar
 */
angular.module('interview').directive('rightSidebar', function () {
    return {
        restict: 'E',
        controllerAs: 'rightSidebar',
        controller: function () {

        },
        templateUrl: 'views/home/right-sidebar.html'
    }
})