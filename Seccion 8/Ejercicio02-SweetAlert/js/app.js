
var app = angular.module('bonusApp',[ ]);

app.controller('mainCtrl', ['$scope', function($scope){

	$scope.titulo = 'Titulo';
	$scope.Subtitulo = 'Subtitulo';
	$scope.mensaje = 'Mensaje';
	$scope.borrado = '';


	$scope.mostrarAlerta = function(){
		swal($scope.mensaje);
	}

	$scope.mostrarAlerta2 = function(){
		swal($scope.titulo, $scope.mensaje)
	}

	$scope.mostrarAlerta3 = function(){
		swal({
		  title: $scope.titulo,
		  text: $scope.mensaje,
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Si, borrarlo",
		  closeOnConfirm: false
		},
		function(){
			$scope.borrado	= "Borrado";
			$scope.$apply();
		  	swal("Borrado", "Has eliminado un fichero imaginario", "success");
		});
	}

	$scope.mostrarAlerta4 = function(){
		swal({
		  title: $scope.titulo,
		  text: $scope.mensaje,
		  type: "input",
		  showCancelButton: true,
		  closeOnConfirm: false,
		  animation: "slide-from-top",
		  inputPlaceholder: "Write something"
		},
		function(inputValue){
		  if (inputValue === false) return false;
		  
		  if (inputValue === "") {
		    swal.showInputError("You need to write something!");
		    return false
		  }
		  
		  swal("Nice!", "You wrote: " + inputValue, "success");
		});
	}


	
}]);
