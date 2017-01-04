var app= angular.module('myFirstApp');

app.controller('ShowController',function($scope, ValueService){
    $scope.value2="";

 $scope.get=function(){
     $scope.value2=ValueService.value;
 }
});