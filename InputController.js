var app= angular.module('myFirstApp');

app.controller('InputController',function($scope, ValueService) {
    $scope.value1="";

    function send(){
        ValueService.value=$scope.value1;
    }

    $scope.$watch($scope.value1,$scope.send);

    $scope.send=function(){
        ValueService.value = $scope.value1;
    }
});
