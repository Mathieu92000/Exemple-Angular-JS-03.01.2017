var app= angular.module('myFirstApp');

app.controller('InputController',function($scope, ValueService) {
    $scope.value="";

    $scope.$watch($scope.value1,$scope.send);

    $scope.send=function(){
        ValueService.value = $scope.value1;
    }
});

var app= angular.module('MyFirstApp');

app.controller('ShowController,function($scope'){
    $scope.value2="";

 $scope.get=function(){
     $scope.value2=ValueService.value;
 }
});