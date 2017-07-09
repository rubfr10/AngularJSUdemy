var app = angular.module('universidadApp',['ngRoute']);

app.controller('mainCtrl', ['$scope','$http', function($scope,$http){
  
	$scope.menuSuperior = 'parciales/menu.html';


	$scope.setActive = function(Opcion){

		$scope.mInicio     = "";
		$scope.mProfesores = "";
		$scope.mAlumnos    = "";

		$scope[Opcion] = "active";

	}

}]);

//filtro personalizado del telefono
// app.filter('telefono', function(){
// 	return function(numero){
// 		var output;
// 		return numero.substring(0,4) + "-" + numero.substring(4);
// 	}
// });

// angular.module('universidadApp').filter('telefono', function () {  // MiAPP puede cambiar, verifica el ng-app
//     return function (tel) {
//         if (!tel) { return ''; }
 
//         return numero.substring(0,4) + "-" + numero.substring(4);
//     };
// });

