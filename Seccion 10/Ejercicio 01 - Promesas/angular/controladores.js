var app = angular.module('promesaApp.controladores', []);

app.controller('mainCtrl', ['$scope', '$q', function($scope, $q){

	$scope.variable = 0;

	$scope.sumar = function(num){

		var q = $q.defer();
		var valido = true;

		setTimeout(function(){
			if(valido){
				q.resolve(num+1);
			}else{
				q.reject('No se sumar');
			}
		},2000)

		

		return q.promise;
	};

	$scope.promise = $scope.sumar(1);

	$scope.promise.then(
		function(valor){
			console.log('Promesa cumplida');
			$scope.variable = valor;
		},
		 function(error){
		 	console.error(error);
		 	$scope.variable = 'error';
		 })


		
}])