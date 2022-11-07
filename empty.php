<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>

<div class="PageHeader-pageHeader">
    <div class="PageHeaderLeft-pageHeaderLeft">
        Dasboard
    </div>

    <div class="PageHeaderLeft-pageHeaderRight">
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
        <div style="margin-bottom: 20px">laatste informatie</div>
    </div>
</div>

<?php $view->footer(); ?>