var app= angular.module('myFirstApp');

app.controller('InputController',function($scope, ValueService) {
    $scope.value="";

    $scope.$watch($scope.value,$scope.send);

    $scope.send=function(){
        ValueService.value = $scope.value;
    }
});
