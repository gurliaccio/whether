weatherApp.service('cityService', function() {
	this.city = "Rome, IT";
});

weatherApp.service('weatherService', ['$resource', function($resource) {
	
	this.GetWeather = function(city, days) {
		var weatherAPI = $resource("http://api.openweathermap.org/data/2.5/forecast/daily?id=4180439&appid=56acd9fb4a4f6138a4dd1055a7fde1fd", {
		callback: "JSON_CALLBACK" }, { get: { method: "JSONP" }});
		
		return weatherAPI.get({ q: city, cnt: days });
        };
}]);