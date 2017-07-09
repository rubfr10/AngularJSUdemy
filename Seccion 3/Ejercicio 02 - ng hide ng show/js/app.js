
var app = angular.module('universidadApp', []);

//scope es una variable global. Esta fuera del controlador, es mas grande, vive en el ambito de angular.

app.controller('profesorCtrl', function($scope){

	//this.profesor = profesorData; //Sin scope actualiza en tiempo real
	$scope.profesor = profesorData;
	$scope.editando = {};
	$scope.mostrarCaja = false;

	$scope.editarProfesor = function(){
		angular.copy($scope.profesor, $scope.editando);
		$scope.mostrarCaja = true;
	}

	$scope.guardar = function(){
		angular.copy($scope.editando, $scope.profesor);
	    $scope.mostrarCaja = false;
	}

	$scope.cancelar = function(){
		$scope.editando = {};
		$scope.mostrarCaja = false;
	}
	
});

var profesorData = {
	nombre: "Juan Carlos Pineda",
	bio: "Saludos estudiante, mi nombre es Juan Carlos, encantado de conocerte, soy una apasionado instructor de matemáticas aplicadas cuánticas, más orientado a la física termonuclear. Mi vocación es ser maestro y lograr transmitir mis conocimientos a todos mis estudiantes!.",
	edad: 47,
	foto: "img/juancarlos.jpg"
}