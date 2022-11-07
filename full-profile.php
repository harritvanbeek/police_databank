<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>
<div ng-controller="ProfileController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Voledige Profiel van : <span ng-bind-html="people.firstname"></span> <span ng-bind-html="people.lastname"></span>   
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
                    <div class="col-md-6">
                        <div class="card dark_card">
                            <div class="card-body">
                                <h2>Profile</h2>

                                <div class="row">
                                  <div class="col-md-3">
                                        <image ng-src="{{people.avatar}}" class="figure-img img-fluid">                                      
                                  </div>  
                                    <table class="table col-md-7">
                                        <tr>
                                            <td class="text-white">BSN :</td>
                                            <td class="text-white">
                                                <span ng-bind-html="people.citizenid"></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-white">GB Datum :</td>
                                            <td class="text-white">
                                                <span ng-bind-html="people.datesofbirth"></span>                                                                                      
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-white">Naam :</td>
                                            <td class="text-white">
                                                <span ng-bind-html="people.firstname"></span>
                                                <span ng-bind-html="people.lastname"></span>                                            
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-white">Geslacht :</td>
                                            <td class="text-white">
                                                <span ng-bind-html="people.sex"></span>                                                                                      
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-white">Nationaliteit :</td>
                                            <td class="text-white">
                                                <span ng-bind-html="people.nationality"></span>                                                                                      
                                            </td>
                                        </tr>


                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="card dark_card">
                            <div class="card-body">
                                <h2 class="float-left">Dossier</h2>   
                                <a href="new-document.php?puuid={{people.puuid}}" class="float-right btn btn-sm btn-primary">Dossier toevoegen</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tittle</th>
                                            <th>Datum</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="text-white">123456789</td>
                                            <td class="text-white">Bank overval</td>
                                            <td class="text-white">11/7/2022</td>
                                            <td class="text-white">
                                                Lees Dossier
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-white">123456789</td>
                                            <td class="text-white">Winkel overval</td>
                                            <td class="text-white">11/7/2022</td>
                                            <td class="text-white">
                                                Lees Dossier
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-white">123456789</td>
                                            <td class="text-white">huis inbraak</td>
                                            <td class="text-white">11/7/2022</td>
                                            <td class="text-white">
                                                Lees Dossier
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>