var app = angular.module('serviciosApp.controladores', []);

app.factory('Personas', ['$http','$q', '$rootScope', function($http, $q, $rootScope){
	
	var self = {
		"cargando": false,
		"mensaje": "Error",
		"data": []
	};

	self.cargarData = function(){

		self.cargando = true;

		var q = $q.defer();

		$http.jsonp("http://www.json-generator.com/api/json/get/cqvUpOcBvm?callback=JSON_CALLBACK")
			.then(function success(respuesta){
				q.resolve(respuesta.data);


			},
			function error(response){
				console.log(":(");
				q.reject("Error");
			});

		return q.promise;
	};

	$rootScope.promise = self.cargarData();
	$rootScope.promise.then(
		function(data){
			self.cargando = false;
			self.mensaje = "Carga OK";
			self.data = data;
		},
		function(error){
			self.cargando = false;
			self.mensaje = "Error";
			console.error(error);
		});

	return self;

}])