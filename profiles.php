<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>

<div ng-controller="ProfileController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Profiles
        </div>

        <div class="PageHeaderLeft-pageHeaderRight">
               <!-- ng-if="profile == 'true'" --> 

            <div class="quicksearch_inputcontainer">
                <div class="quicksearchinput_container">
                        <label for="search" class="quicksearchinput_icon">Search</label>
                        <input id="search" class="quicksearchinput_searchinput" ng-model="search" type="text" autocomplete="off" spellcheck="false">
                </div>
            </div>
        </div>
    </div>

    <div class="PageContent-pageContent Scroller-scroller Scroller-vertical">
        <div class="DiscoverPage-discoverPageContent PageContent-innerPageContent">
            <div style="margin-bottom: 20px">
                
                    <div class="col-md-7 col-sm-12 mx-auto">
                        <div class="card dark_card">
                            <div class="card-body">
                                
                                <div ng-if="profile == 'false'" class="boann_input">
                                    <label>Search for Profile</label>  
                                    <input class="form-control input_boann" ng-model="from.search">
                                    <button ng-click="searchProfile(from)" class="btn btn-sm btn-primary">search</button>
                                    <a ng-if="noprofile == 'true'" class="btn btn-sm btn-primary" href="add-profile.php">Maak een profiel</a>
                                </div>
                                
                                <ul class="police_profile" ng-if="peoples.length">
                                    <li ng-repeat="people in peoples">
                                        <table class="table ">
                                            <tr>
                                                <td class="text-white">Naam :</td>
                                                <td class="text-white">
                                                    <span ng-bind-html="people.firstname"></span>
                                                    <span ng-bind-html="people.lastname"></span>
                                                </td>
                                                <td class="text-white">
                                                    <a href="full-profile.php?puuid={{people.puuid}}" class="text-white"><i class="far fa-eye"></i></a>
                                                    <a href="full-profile.php?puuid={{people.puuid}}" class="text-white"><i class="fas fa-pen"></i></a>
                                                </td>
                                            </tr>                                            
                                        </table>
                                        <hr>                                                                         
                                    </li>                                    
                                </ul>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>