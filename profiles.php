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
            <!-- <div class="quicksearch_inputcontainer">
                <div class="quicksearchinput_container">
                        <label for="search" class="quicksearchinput_icon">Search</label>
                        <input id="search" class="quicksearchinput_searchinput" ng-model="search" type="text" autocomplete="off" spellcheck="false">
                </div>
            </div> -->
        </div>
    </div>

    <div class="PageContent-pageContent Scroller-scroller Scroller-vertical">
        <div class="DiscoverPage-discoverPageContent PageContent-innerPageContent">
            <div style="margin-bottom: 20px">
                
                    <div class="col-md-6 mx-auto">
                        <div class="card dark_card">
                            <div class="card-body">
                                <div class="boann_input">
                                    <label>Search for Profile</label>  
                                    <input class="form-control input_boann" ng-model="from.search">
                                    <button ng-click="searchProfile(from)" class="btn btn-sm btn-primary">search</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>