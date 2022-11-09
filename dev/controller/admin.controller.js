"use strict";
boann.controller('AdminController', ['$scope', '$http', '$window', function($scope, $http, $window) {

    var statePage       = $window.location.pathname.split("/")[2].split(".")[0];
    var searchPage      = $window.location.search.split("=")[1];
    var URI             = controler.view + "users/index.php"; 
    $scope.profile      = "false";
    $scope.noprofile    = "false";
    
    console.log(statePage);

    switch(statePage){
        case "admin" :
            
            $scope.saveUser   =   function(data){
                if(data){
                    var VALUES = [{data:true, data:data}];  
                    $http.post(URI, VALUES, {params:{action:'insertUser'}}).then(function(data){
                        if(data.status == 200){  
                            console.log(data.data);
                            switch(data.data.data){
                                case "success" :
                                    location.href = data.data.dataURL;                                    
                                break;

                                case "error" :
                                    swal("Oeps!", data.data.dataContent, "error");
                                break;
                            }
                        }
                    });
                    
                }else{
                    swal("Oeps!", "You have not given up anything!", "error");
                }
            }

            users();    
        break;
    }

    function users(){
        $http.get(URI, {params:{action:"getUsers"}}).then(function(data){
            if(data.status == 200){
                $scope.users = data.data;
                //console.log(data.data);
            }
        });
    }

}]);