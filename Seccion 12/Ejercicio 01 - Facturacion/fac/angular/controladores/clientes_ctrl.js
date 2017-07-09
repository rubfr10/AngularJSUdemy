var app = angular.module('facturacionApp.clientesCtrl',[]);

app.controller('clientesCtrl', ['$scope', 'Clientes','$routeParams', function($scope, Clientes, $routeParams){

	var pag = $routeParams.pag;

	$scope.activar('mClientes', '', 'Clientes', 'Listado');

	$scope.clientes = {};
	$scope.clienteSel = {};

	// Clientes.cargarPagina(pag).then(function(){
	// 	$scope.clientes = Clientes;
	// });

	$scope.moverA = function(pag){
		Clientes.cargarPagina(pag).then(function(){
			$scope.clientes = Clientes;
		});
	};

	$scope.moverA(pag);

	//Mostar modal para editar
	$scope.mostrarModal = function(cliente){

		angular.copy(cliente, $scope.clienteSel);
		$("#modalCliente").modal();
	}

	//Funcion para guardar

	$scope.guardar = function(cliente, frmCliente){
		Clientes.guardar(cliente).then(function(){
			$("#modalCliente").modal('hide');
			$scope.clienteSel = {};
			frmCliente.autoValidateFormOptions.resetForm();
		});
	};


}]);