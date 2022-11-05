"use strict";
boann.controller('dashboardController', ['$scope', '$http', '$window', '$state', function($scope, $http, $window, $state) {
    
    console.log($state.$current.url.pattern.split("/")[1] + " = case name");
    console.log($state.router.globals.$current.views.mainpage.controller + "Controller is Loaded");

    var URI     =   controler.view + "dashboard/index.php";
    var state   =   $state.$current.url.pattern.split("/")[1];  


    switch(state){
        case "dashboard" :
            get_flight();
            //setInterval(get_flight, 1000);        
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

    function get_flight(){
        $http.get("../libraries/callback/callback_msfs.php", {params:{action:"get_flights"}}).then(function(data){
            if(data.status = 200){            
                if(data.data){
                    console.log(data.data[0]);
                    $scope.flight = data.data[0];                                                            
                }           
            };
        });
    }

}]);