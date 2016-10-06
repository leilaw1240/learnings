'use strict';

/**
 * @ngdoc directive
 * @name interview.directive:registration
 * @description
 * # registration
 */
angular.module('interview').directive('registration', function () {
    return {
        restict: 'E',
        controllerAs: 'register',
        controller: function () {

        },
        templateUrl: 'views/home/registration.html'
    }
})