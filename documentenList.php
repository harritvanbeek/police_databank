<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>

<div ng-controller="DocumentenController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Documenten Lijst
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
                <a class="btn btn-sm btn-primary float-right" href="./new-document.php">Nieuw Document</a>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Arthur</th>
                            <th>Datum</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr ng-repeat="document in documenten">
                            <td class="text-white" ng-bind-html="document.code"></td>
                            <td class="text-white" ng-bind-html="document.title"></td>
                            <td class="text-white" ng-bind-html="document.name"></td>
                            <td class="text-white" ng-bind-html="document.postdate"></td>
                            <td>
                                <a href="document.php?ruuid={{document.ruuid}}" class="btn btn-sm btn-primary waves-effect waves-light">Lees Dossier</a>   
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>