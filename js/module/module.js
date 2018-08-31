"use strict"

angular.module('app', ["ngRoute", "ngAnimate"]).config(function($routeProvider){
    $routeProvider
    .when("/circle", {

    })
    .when("/tiles", {

    })
    .when("/works", {

    })
    .otherwise({redirectTo: "/circle"});
});