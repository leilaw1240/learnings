'use strict';

/**
 * @ngdoc overview
 * @name interview
 * @description
 * # interview
 *
 * Main module of the application.
 */
var app = angular
        .module('interview', [
            'ngAnimate',
            'ngCookies',
            'ngResource',
            'ngRoute',
            'ngSanitize',
            'ngTouch'
        ])
        .config(function ($routeProvider, $locationProvider) {
//            console.log($routeProvider);
            $routeProvider
                    .when('/', {
                        templateUrl: 'views/home/home.html',
                        controller: 'homeCtrl',
                        controllerAs: 'iq'
                    })
                    .when('/ask-question', {
                        templateUrl: 'views/question/ask-question.html',
//                        controller: 'homeCtrl',
//                        controllerAs: 'iq'
                    }).otherwise({
                redirectTo: '/'
            });

//      $locationProvider.html5Mode(true).hashPrefix('*');
        });
