<?php
    require_once "./libraries/config.php";
    $view->header();
?>
<div ng-controller="StraffenController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Straffen
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
                <div class="row">
                    
                    <div ng-repeat="straf in straffen | filter:search" class="col-md-3" style="margin-bottom: 20px;">
                        <div class="card dark_card">
                            <div class="card-body">
                                <h6 ng-bind-html="straf.name"></h6>
                                <p ng-bind-html="straf.description"></p>
                                <hr>
                                <label>Bedrag :</label> <span ng-bind-html="straf.fine"></span><br>
                                <label>Celstraff :</label> <span ng-bind-html="straf.months"></span> <span>Maanden = (minuten)</span>
                            </div>
                        </div>
                    </div>                
                </div>

            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>
