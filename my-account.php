<?php
    require_once "./libraries/config.php";
    $view->header();
?>

<div ng-controller="MyaccountController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Mijn Account
        </div>

        <div class="PageHeaderLeft-pageHeaderRight">

        </div>
    </div>

    <div class="PageContent-pageContent Scroller-scroller Scroller-vertical">
        <div class="DiscoverPage-discoverPageContent PageContent-innerPageContent">
            <div style="margin-bottom: 20px">
                <div class="card dark_card">
                    <div class="card-body">
                        <div class="form-group boann_input">
                            <label>Gebruikersnaam  :</label>
                            <input class="form-control input_boann" disabled="disabled" type="text" ng-model="me.username" >
                        </div>

                        <div class="form-group boann_input">
                            <label>Naam  :</label>
                            <input class="form-control input_boann" disabled="disabled" type="text" ng-model="me.name" >
                        </div>

                        <hr>

                        <div class="form-group boann_input">
                            <label>Huidige wachtwoord  :</label>
                            <input class="form-control input_boann" type="password" ng-model="form.password" >
                        </div>

                        <div class="form-group boann_input">
                            <label>Nieuw wachtwoord  :</label>
                            <input class="form-control input_boann" type="password" ng-model="form.new_password" >
                        </div>

                        <div class="form-group boann_input">
                            <label>Herhaal wachtwoord  :</label>
                            <input class="form-control input_boann" type="password" ng-model="form.repeat_password" >
                        </div>

                        <button ng-click="savePassword(form)" type="button" class="btn btn-primary btn-sm">Opslaan</button>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <?php $view->footer(); ?>
</div>
