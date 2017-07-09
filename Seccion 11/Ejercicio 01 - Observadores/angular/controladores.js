var app = angular.module('paginacionApp.controladores',[]);

app.controller('observadorCtrl', ['$scope', function ($scope) {
	
	
	$scope.nombre = "Juan Carlos"

	//funcion que se ejecuta cuando cambia el valor de la variable

	$scope.$watch('nombre', function(valorNuevo, valorViejo){
		console.log(valorNuevo,valorViejo);
	});



	

}]);