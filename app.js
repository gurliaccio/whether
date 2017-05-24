var weatherApp = angular.module('weatherApp', ['ngRoute', 'ngResource']);

weatherApp.config(function ($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'pages/home.htm',
		controller: 'homeController'
	})
	.when('/forecast', {
		templateUrl: 'pages/forecast.htm',
		controller: 'forecastController'
	})
	.when('/forecast/:days', {
		templateUrl: 'pages/forecast.htm',
		controller: 'forecastController'
	})
	.when('/about', {
		templateUrl: 'pages/about.htm',
		controller: 'aboutController'
	})
});

weatherApp.service('cityService', function() {
	this.city = "Rome, IT";
})

weatherApp.controller('homeController', ['$scope', 'cityService', function($scope, cityService) {
	//$('#hideInput').hide();
	$scope.city = cityService.city;
	
	$scope.$watch('city', function() {
		cityService.city = $scope.city;
	})
	
//	$scope.clearSearch = function() {
//		$scope.city = null;
//    }
										 
}]);
weatherApp.controller('aboutController', ['$scope', function($scope) {
	
										 
}]);

weatherApp.controller('forecastController', ['$scope', '$resource', '$routeParams', 'cityService', function($scope, $resource, $routeParams, cityService) {
	$scope.city = cityService.city;	
	$scope.days = $routeParams.days || 2;
	$scope.weatherAPI = $resource("http://api.openweathermap.org/data/2.5/forecast/daily?id=4180439&appid=56acd9fb4a4f6138a4dd1055a7fde1fd", {
		callback: "JSON_CALLBACK" }, { get: { method: "JSONP" }}
	);
	$scope.weatherResult = $scope.weatherAPI.get({ q: $scope.city, cnt: $scope.days });
	console.log($scope.weatherResult);
	$scope.convertToDate = function(dt) {
		return new Date(dt * 1000);	
	}
	$scope.convertToFahrenheit = function(degK) {
		return Math.round((1.8 * (degK - 273)) + 32);
	}
	
}]);

//DIRECTIVES
weatherApp.directive("weatherReport", function() {
	
	return {
		restrict: 'E',
		templateUrl: "directives/weatherReport.htm",
		replace: true,
		scope: {
			weatherDay: "=",
			convertToStandard: "&",
			convertToDate: "&",
			dateFormat: "@"
		}
	}
	console.log(w);
	
})


























