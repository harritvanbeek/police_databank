"use strict";
boann.controller('dashboardController', ['$scope', '$http', '$window', '$state', function($scope, $http, $window, $state) {
    
    console.log($state.$current.url.pattern.split("/")[1] + " = case name");
    console.log($state.router.globals.$current.views.mainpage.controller + "Controller is Loaded");

    var URI     =   controler.view + "dashboard/index.php";
    var state   =   $state.$current.url.pattern.split("/")[1];  


    switch(state){
        case "dashboard" :
           
        break;
        
        case "my_account" :
            $http.get(controler.view + "account/index.php", {params:{action:"me"}}).then(function(data){                                                  
                if(data.status = 200){
                    if(data.data){
                        $scope.me = data.data;  
                        /*console.log(data.data);*/
                    }           
                };
            });             
        break;
    }

}]);