var app = angular.module('facturacionApp', ['ngRoute', 
											'facturacionApp.configuracion',
											'facturacionApp.mensajes',
											'facturacionApp.notificaciones',
											'facturacionApp.clientesCtrl',
											'facturacionApp.dashboardCtrl',
											'facturacionApp.clientes',
											'jcs-autoValidate'
											]);

angular.module('jcs-autoValidate')
	.run([
	    'defaultErrorMessageResolver',
	    function (defaultErrorMessageResolver) {
	        // To change the root resource file path
	        defaultErrorMessageResolver.setI18nFileRootPath('angular/libs');
	        defaultErrorMessageResolver.setCulture('es-co');
	    }
]);

app.controller('mainCtrl', ['$scope','Configuracion', 'Mensajes', 'Notificaciones', 'Clientes', 
							function($scope, Configuracion, Mensajes, Notificaciones, Clientes){
	
	$scope.config = {};
	$scope.mensajes = Mensajes.mensajes;
	$scope.notificaciones = Notificaciones.notificaciones;

	$scope.titulo = "";
	$scope.subtitulo = "";

	$scope.usuario = {
		nombre:"Ruben Fuentes"
	};

	Configuracion.cargar().then(
		function(){
			$scope.config = Configuracion.config;
		});

	//Funciones globales del Scope

	$scope.activar = function(menu, submenu, titulo, subtitulo){

		$scope.mDashboard = ""; 
		$scope.mClientes = "";
		$scope.titulo = titulo;
		$scope.subtitulo = subtitulo;

		$scope[menu] = 'active';

 	};

}]);

//Rutas

app.config(['$routeProvider' , function($routeProvider){

	$routeProvider
		.when('/',{
			templateUrl:'dashboard/dashboard.html',
			controller: 'dashboardCtrl'
		})
		.when('/clientes/:pag',{
			templateUrl:'clientes/clientes.html',
			controller: 'clientesCtrl'
		})
		.otherwise({
			redirectTo:'/'
		})

}]);

//Filtros

app.filter('quitarLetra', function(){
	return function(palabra){
		if(palabra){
			if(palabra.length > 1){
				return palabra.substr(1);
			}
			else{
				return palabra;
			}
		}
	}
})

.filter('mensajeCorto', function(){
	return function(mensaje){
		if(mensaje){
			if(mensaje.length > 35){
				return mensaje.substr(0,35) + "...";
			}
			else{
				return mensaje;
			}
		}
	}
});