'use strict';

/**
 * @ngdoc directive
 * @name interview.directive:registration
 * @description
 * # registration
 */
angular.module('interview').directive('questionList', function () {
    return {
        restict: 'E',
        controllerAs: 'questionlist',
        controller: function ($http, $log) {
            var interview = this;

            interview.tab = 0;
            
            interview.tabs = ['Recent Questions','Most Responses','Recently Answered','No answers']

            interview.setCurrentTab = function (newValue) {
                interview.tab = newValue;
            };

            interview.getCurrentTab = function (tabName) {
                return interview.tab === tabName;
            };

            interview.questions = [];

            $http.get('http://localhost/interview/api/GetQuestions').success(function (response) {
                console.log(response.error);
                if (response.error == false) {
                    interview.questions = response.data.questions;
                }

            });
        },
        templateUrl: 'views/question/question-list.html'
    }
})