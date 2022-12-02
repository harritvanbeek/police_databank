"use strict";
boann.controller('MyaccountController', ['$scope', '$http', '$window', function($scope, $http, $window) {

    var statePage       = $window.location.pathname.split("/")[2].split(".")[0];
    var searchPage      = $window.location.search.split("=")[1];
    var URI             = controler.view + "account/index.php"; 
    
    //console.log(statePage);

    switch(statePage){
        case "my-account" :
            
            $scope.savePassword = function(data){
                console.log(data);
            }

            me();
        break;
    }   

    function me(){        
        $http.get(URI, {params:{action:"me"}}).then(function(data){
            if(data.status === 200){
                $scope.me = data.data;                
            }
        }); 
    }



}]);