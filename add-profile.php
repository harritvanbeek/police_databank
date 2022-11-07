<?php
    require_once "./libraries/config.php";    
    $view->header();   
?>

<div ng-controller="ProfileController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Maak een Profile
        </div>

        <div class="PageHeaderLeft-pageHeaderRight">
            
        </div>
    </div>

    <div class="PageContent-pageContent Scroller-scroller Scroller-vertical">
        <div class="DiscoverPage-discoverPageContent PageContent-innerPageContent">
            <div style="margin-bottom: 20px">
                
                    <div class="col-md-7 col-sm-12 mx-auto">
                        <div class="card dark_card">
                            <div class="card-body">
                                
                                <div class="row">
                                    
                                    <div class="col-md-7">                                    
                                        <div class="boann_input">
                                            <label>BSN : </label>
                                            <input class="form-control input_boann" ng-model="form.citizenid">
                                        </div>

                                        <div class="boann_input">
                                            <label>Voornaam : </label>
                                            <input class="form-control input_boann" ng-model="form.firstname">
                                        </div>

                                        <div class="boann_input">
                                            <label>Achternaam : </label>
                                            <input class="form-control input_boann" ng-model="form.lastname">
                                        </div>

                                        <div class="boann_input">
                                            <label>GB Datum : </label>
                                            <input class="form-control input_boann" ng-model="form.datesofbirth">
                                        </div>

                                        <div class="boann_input">
                                            <label>Geslacht : </label>
                                            <input class="form-control input_boann" ng-model="form.sex">
                                        </div>

                                        <div class="boann_input">
                                            <label>Nationaliteit : </label>
                                            <input class="form-control input_boann" ng-model="form.nationality">
                                        </div>
                                        <button ng-click="setProfile(form)" class="btn btn-sm btn-primary">Save</button>                                
                                    </div>

                                     <!-- <div class="col-md-5">
                                        <div class="boann_input">
                                            <label>Upload Foto : </label>
                                            <input class="form-control input_boann">
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<?php $view->footer(); ?>