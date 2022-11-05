"use strict";
boann.controller('TwitterController', ['$scope', '$http', '$window', '$state', function($scope, $http, $window, $state) {
    
    console.log($state.$current.url.pattern.split("/")[1] + " = case name");
    console.log($state.router.globals.$current.views.mainpage.controller + "Controller is Loaded");

    var URI     =   controler.view + "twitter/index.php";
    var state   =   $state.$current.url.pattern.split("/")[1];  



    switch(state){
        case "add-twitter" :
            
            $(function() {
                $("#datepicker").datepicker();                
            });

            
            $scope.submit = function(post){
                console.log("test");
                if(post){
                    /* var VALUES = [{data:true, items:post}];
                    $http.post(URI, VALUES, {params:{action:'postTweet'}}).then(function(data){
                        console.log(data.data);
                        $state.go("my_tweets");
                    }); */                    
                }
            }


            $scope.tinymceOptions = {
                plugins: 'link image code',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
            };
            

        break;
    }

}]);
