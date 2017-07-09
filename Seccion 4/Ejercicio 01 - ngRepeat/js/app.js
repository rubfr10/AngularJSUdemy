(function(){

var app = angular.module('universidadApp',[ ]);

app.controller('listadoCtrl', ['$scope', function($scope){
	
		$scope.listado = ["Fernando Herrera", "Melissa Flores", "Juan Carlos Pineda", "Maria Perez"];

		$scope.listadoProfesores = {
			profesores: [{
				nombre: "Ruben Fuentes",
				edad: 28,
				clase: "PEE"
			},
			{
				nombre: "Soraya Estalayo",
				edad: 33,
				clase: "POO"
			}]
		}


}]);





})();
