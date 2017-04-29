var spaApp = angular.module('spaApp', [
    'ngRoute',
    'ngCart',
    'angular.filter'

]);
spaApp.controller('index', function($scope, $http){


})
spaApp.controller ('index', ['$scope', '$http', 'ngCart', function($scope, $http, ngCart) {
    ngCart.setTaxRate(7.5);
    ngCart.setShipping(2.99);
    $http.get('http://localhost/rosemary260417/backend/api/stockitems/list-stockitems?_format=json')
        .then(function (response) {
            $scope.message = response.data;
        })
}]);
