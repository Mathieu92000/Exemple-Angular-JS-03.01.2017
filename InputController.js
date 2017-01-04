var app= angular.module('myFirstApp');

app.controller('InputController',function($scope, ValueService) {
    $scope.value1="";

    $scope.send = function(){
        ValueService.value = $scope.value1;
    }

    $scope.$watch('value1',$scope.send);
});
