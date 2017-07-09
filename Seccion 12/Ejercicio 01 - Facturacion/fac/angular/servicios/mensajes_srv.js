var app = angular.module('facturacionApp.mensajes',[]);

app.factory('Mensajes', ['$http', '$q', function($http, $q){
	
	var self = {
		mensajes:[{
			img:'dist/img/user2-160x160.jpg',
			nombre: "Ruben Fuentes",
			mensaje: "Esto es una prueba",
			fecha: "4 Julio"
		},{
			img:'dist/img/user2-160x160.jpg',
			nombre: "Soraya Estalayo",
			mensaje: "Esto es una pruebaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa2",
			fecha: "4 Agosto"
		},{
			img:'dist/img/user2-160x160.jpg',
			nombre: "Kira Fuentes Estalayo",
			mensaje: "Esto es una prueba3",
			fecha: "4 Mayo"
		}]
	};

	return self;
}])