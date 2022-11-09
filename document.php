<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>

<div ng-controller="DocumentenController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Document : <span ng-bind-html="ducument.title"></span> 
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
            <div style="margin-bottom: 20px">
                Tenaamstelling : <span ng-bind-html="ducument.firstname"></span> <span ng-bind-html="ducument.lastname"></span><br/>
                Documentcode : <span ng-bind-html="ducument.code"></span><br/><br/>

                <span ng-bind-html="ducument.raport"></span> 
                <br/>
                <p>
                    <span ng-bind-html="ducument.rank"></span><br/> 
                    <span ng-bind-html="ducument.name"></span> 
                </p>
            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>