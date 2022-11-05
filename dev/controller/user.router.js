boann.config(['$stateProvider', '$urlMatcherFactoryProvider', '$urlRouterProvider', '$locationProvider', 
    function($stateProvider, $urlMatcherFactoryProvider, $urlRouterProvider, $locationProvider){
        $urlRouterProvider.otherwise("/dashboard/");
        $urlMatcherFactoryProvider.caseInsensitive(true);
        
        $stateProvider
            .state({
                name:"my_account",
                url: "/my_account/",
                views : {
                    "navbar" : {
                        templateUrl : "./html/user/navbar.html?v="+controler.version,    
                        controller: "NavbarController",                 
                    },

                    "sidebar" : {
                        templateUrl : "./html/user/sidebar.html?v="+controler.version,   
                        //controller: "SidebarController",                    
                    },

                    "mainpage" : {
                        templateUrl : "./html/user/my_account.html?v="+controler.version,                        
                        controller  : "dashboardController",
                    },
                }
            })
            .state({
                name:"dashboard",
                url: "/dashboard/",
                views : {
                    "navbar" : {
                        templateUrl : "./html/user/navbar.html?v="+controler.version,    
                        controller: "NavbarController",                 
                    },

                    "sidebar" : {
                        templateUrl : "./html/user/sidebar.html?v="+controler.version,   
                        //controller: "SidebarController",                    
                    },

                    "mainpage" : {
                        templateUrl : "./html/user/dashboard.html?v="+controler.version,                        
                        controller  : "dashboardController",
                    },
                }
            })
            
            .state({
                name:"my_tweets",
                url: "/twitter/",
                views : {
                    "navbar" : {
                        templateUrl : "./html/user/navbar.html?v="+controler.version,    
                        controller: "NavbarController",                 
                    },

                    "sidebar" : {
                        templateUrl : "./html/user/sidebar.html?v="+controler.version,   
                        //controller: "SidebarController",                    
                    },

                    "mainpage" : {
                        templateUrl : "./html/user/twitter.html?v="+controler.version,                        
                        controller  : "TwitterController",
                    },
                }
            })
            .state({
                name:"add_tweets",
                url: "/add-twitter/",
                views : {
                    "navbar" : {
                        templateUrl : "./html/user/navbar.html?v="+controler.version,    
                        controller: "NavbarController",                 
                    },

                    "sidebar" : {
                        templateUrl : "./html/user/sidebar.html?v="+controler.version,   
                        //controller: "SidebarController",                    
                    },

                    "mainpage" : {
                        templateUrl : "./html/user/addTwitter.html?v="+controler.version,                        
                        controller  : "TwitterController",
                    },
                }
            });        
}]);
