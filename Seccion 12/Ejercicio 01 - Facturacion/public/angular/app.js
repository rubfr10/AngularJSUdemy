var app = angular.module('loginApp', ['login.loginService']);


app.controller('mainCtrl', ['$scope','LoginService',function($scope,LoginService){
	
	$scope.invalido = false;
	$scope.cargando = false;
	$scope.mensaje = "";

	$scope.datos = {};

	$scope.ingresar = function(datos){

		if(datos.usuario.length < 3){
			$scope.invalido = true;
			$scope.mensaje = 'Longitud del usuario incorrecta';
			return;
		}else if(datos.contrasena.length < 3){
			$scope.invalido = true;
			$scope.mensaje = 'Longitud de la contraseña incorrecta';
			return;
		}

		$scope.invalido = false;

		LoginService.login(datos)
			.then(function(data){
				if(data.data.err){
					$scope.invalido = true;
					$scope.cargando = false;
					$scope.mensaje = data.data.mensaje;
				}else{
					window.location = data.data.url;
					console.log(data.data.mensaje);
				}
			});
	};

}]);

