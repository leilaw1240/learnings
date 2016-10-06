
angular.module('interview')
        .controller('homeCtrl', ['$http', '$log', function ($http, $log) {


            }])
        .directive('rightSidebar', function () {
            return {
                restict: 'E',
                controllerAs: 'rightSidebar',
                controller: function () {

                },
                templateUrl: 'views/home/right-sidebar.html'
            }
        })
        .directive('registration', function () {
            return {
                restict: 'E',
                controllerAs: 'register',
                controller: function () {

                },
                templateUrl: 'views/home/registration.html'
            }
        });