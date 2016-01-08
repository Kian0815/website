var app = angular.module('POG', ['ngRoute', 'POGControllers']);
app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(false);
    $routeProvider
        .when('/', {
            templateUrl: '/website/pages/home.html',
            controller: 'HomeCtrl',
            title: 'Home'
        })
        .when('/azienda', {
            templateUrl: '/website/pages/company.html',
            controller: 'CompanyCtrl',
            title: 'Azienda'
        })
        .otherwise({
            redirectTo: '/'
        });
}]);