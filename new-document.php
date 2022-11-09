<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>
<style>
    select{
        display: block !important;
    }
</style>

<div ng-controller="DocumentenController">
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
            <div style="margin-bottom: 20px">
                <div class="card dark_card">
                    <div class="card-body">
                        <div class="boann_input">
                            <label>Omschrijving</label>
                            <input class="form-control input_boann" ng-model="form.discription">
                        </div>

                        <div class="boann_input">
                            <label>Bevinding</label></br>
                            <textarea ui-tinymce="tinymceOptions" ng-model="form.tinymceModel"></textarea>
                        </div>

                        <button ng-click="save(form)" class="btn btn-sm btn-primary">Opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>