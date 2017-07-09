// var app = angular.module( "app", [ ] );
app.config( function( $routeProvider ){

  $routeProvider
    .when('/',{
        templateUrl: 'parciales/home.html',
        controller: 'inicioCtrl'
    })
    .when('/alumnos',{
        templateUrl: 'parciales/alumnos.html',
        controller: 'alumnosCtrl'
    })
    .when('/profesores',{
        templateUrl: 'parciales/profesores.html',
        controller: 'profesoresCtrl'
    })
    .otherwise({
      redirectTo: '/'
    })

})
