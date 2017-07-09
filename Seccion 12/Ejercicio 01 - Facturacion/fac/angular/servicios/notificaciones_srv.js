var app = angular.module('facturacionApp.notificaciones',[]);

app.factory('Notificaciones', ['$http', '$q', function($http, $q){
	
	var self = {
		notificaciones:[{
			icono:"fa-user",
			texto:"Notificacioooooooooooooooooooooooooooooooooooooooon"
		},
		{
			icono:"fa-save",
			texto:"Petando disco duro"
		}]
	};

	return self;
}])