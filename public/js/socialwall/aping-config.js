"use strict";

angular.module('jtt_aping').config(['$provide', function($provide) {

    $provide.value("apingDefaultSettings", {
        apingApiKeys: {
            //add here your api keys
            //https://aping.readme.io/docs/configuration
        }
    });

}]);