var app = angular.module('mainRoutes',['ngRoute']);

app.config(function ($routeProvider) {
    $routeProvider.when('/',{
        templateUrl: '../views/login.php'
    }).when('/publish',{
        templateUrl: '../views/main.php',
        controller: 'mainController'
    }).when('/about',{
    	templateUrl: '../views/home/about.html'
    }).otherwise({
        redirectTo: '/'
    });
});