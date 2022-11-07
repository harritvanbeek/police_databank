"use strict";
boann.controller('ProfileController', ['$scope', '$http', '$window', function($scope, $http, $window) {

    var statePage       = $window.location.pathname.split("/")[2].split(".")[0];
    var URI             = controler.view + "profile/index.php"; 
    $scope.profile      = "false";
    $scope.noprofile    = "false";
    
    console.log(statePage);

    switch(statePage){
        case "add-profile" :
            $scope.setProfile   =   function(data){
                if(data){
                    var VALUES = [{data:true, data:data}];  
                    $http.post(URI, VALUES, {params:{action:'insertProfiles',}}).then(function(data){
                        if(data.status == 200){                                    
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
        break;

        case "profiles" :

            console.log($window.location.search.split("=")[1]);


            $scope.searchProfile = function(data){
                if(data){
                    var VALUES = [{data:true, data:data}];
                        $http.post(URI, VALUES, {params:{action:'searchProfiles',}}).then(function(data){
                            if(data.status == 200){
                                $scope.peoples = data.data;
                                
                                console.log($scope.peoples);                                  
                                switch(data.data.data){
                                    case "success" :
                                        $scope.profile      = "true";
                                    break;
                                    
                                    case "noprofiles" :
                                        $scope.noprofile    = "true";
                                    break;
                                }

                            }
                        });
                }else{
                    swal("Oeps!", "You have not given up anything!", "error");
                }
            }
        break;
    }



}]);