"use strict";
boann.controller('StraffenController', ['$scope', '$http', '$window', function($scope, $http, $window) {

    var statePage       = $window.location.pathname.split("/")[2].split(".")[0];
    var searchPage      = $window.location.search.split("=")[1];
    var URI             = controler.view + "straffen/index.php"; 
    $scope.profile      = "false";
    $scope.noprofile    = "false";
    
    console.log(statePage);

    switch(statePage){
        case "straffen" :
            $http.get(URI, {params:{action:'allStraffen'}}).then(function(data){
                if(data.status == 200){
                    $scope.straffen = data.data;                   
                }
            });
        break;
    }

}]);