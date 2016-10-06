'use strict';

/**
 * @ngdoc directive
 * @name interview.directive:footer
 * @description
 * # footer
 */
angular.module('interview').directive('footer', function () {
    return {
        restict: 'E',
        controllerAs: 'footer',
        controller: function () {

        },
        templateUrl: 'views/home/common-footer.html'
    }
})