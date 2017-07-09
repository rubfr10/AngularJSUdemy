
var app = angular.module('bonusApp',['jcs-autoValidate']);

angular.module('bonusApp')
    .run([
    'defaultErrorMessageResolver',
    function (defaultErrorMessageResolver) {
        // passing a culture into getErrorMessages('fr-fr') will get the culture specific messages
        // otherwise the current default culture is returned.

        defaultErrorMessageResolver.setI18nFileRootPath('js/lib');
        defaultErrorMessageResolver.setCulture('es-CO');

        defaultErrorMessageResolver.getErrorMessages().then(function (errorMessages) {
          errorMessages['edadMinima'] = 'Debe ser mayor de {0} años de edad';
          errorMessages['edadMaxima'] = 'Debe ser menor de {0} años de edad';
        });
    }
]);

app.controller('mainCtrl', ['$scope', function($scope){

	$scope.formData = {};


	$scope.guardar_datos = function( valido ){

		console.log("Posteando...");

	}


	
}]);
