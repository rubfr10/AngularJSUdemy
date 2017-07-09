(function(){

var app = angular.module('ejemplosApp',[ ]);



app.controller('mainCtrl', ['$scope','$http', function($scope,$http){
  
	$scope.profesores = {};
	$http.get('json/profesores.json').success(function(data){
		//codigo cuando es correcta la peticion
		$scope.profesores = data.profesores;
	});

  



}]);





})();
