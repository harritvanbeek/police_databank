"use strict";
boann.controller('DocumentenController', ['$scope', '$http', '$window', function($scope, $http, $window) {

    var statePage       = $window.location.pathname.split("/")[2].split(".")[0];
    var searchPage      = $window.location.search.split("=")[1];
    var URI             = controler.view + "documenten/index.php"; 
    $scope.profile      = "false";
    $scope.noprofile    = "false";
    
    console.log(statePage);

    switch(statePage){
        case "new-document" :
            $scope.save = function(data){
                if(data){
                    var VALUES = [{data:true, data:data, puuid:searchPage}];  
                    $http.post(URI, VALUES, {params:{action:'setDocument'}}).then(function(data){
                        //$scope.people = data.data;
                        console.log(data.data);
                    });
                }                
            }
        break;
    }

    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;    
    $scope.tinymceOptions = {

        plugins: 'link image code template',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code template',

        height: 600,
        
        templates : [
            {
              title: 'Mini Proces Verbaal',
              url: './html/templates/mini_proces_verbaal.html',
              description: 'Verkeers overtredingen'
            },

            {
              title: 'Voertuig Inbeslagname',
              url: './html/templates/voertuig_inbeslagname.html',
              description: 'wok status'
            },
            
            {
                title: 'Proces Verbaal Aangifte',
                url: './html/templates/proces_verbaal_aangifte.html',
                description: 'Aangifte opmaken.'
            },

            {
                title: 'Proces Verbaal Aanhouding',
                url: './html/templates/test2.htm',
                description: 'Aanhouding verichten.'
            },

            {
                title: 'Proces Verbaal Bewijsmateriaal',
                url: './html/templates/test2.htm',
                description: 'Bewijsmateriaal gevonden.'
            },
          ],

        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
    };



}]);