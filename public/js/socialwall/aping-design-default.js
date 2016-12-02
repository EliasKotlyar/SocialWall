"use strict";

angular.module('jtt_aping_design_default', ['wu.masonry', 'linkify', 'angularMoment', 'ngSanitize'])
    .run(['amMoment','$timeout', function (amMoment,$timeout) {
        amMoment.changeLocale('en');

    }])
    .controller('apingDefaultDesignController', ['$scope', '$sce', '$timeout','$window', function ($scope, $sce, $timeout,$window) {


        $timeout(function () {
            console.log('test');
            $window.location.reload();
        }, 10000);


        $scope.$on('apiNG.resultMerged', function () {
            //do anything on resultMerged event




        });

        $scope.refresh = function () {
            $scope.$broadcast("masonry.reload");
        };

        $scope.$on('imagesLoaded.SUCCESS', function () {
            $scope.refresh();
        });
        $scope.$on('imagesLoaded.ALWAYS', function () {
            $scope.refresh();
        });

        $scope.getUrl = function (url) {
            if (url) {
                return $sce.trustAsResourceUrl(url);
            }
        };

        $scope.getHtml = function (string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };

    }]);