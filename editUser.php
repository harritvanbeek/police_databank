<?php
    require_once "./libraries/config.php";
    $view->header();
    $view->isAdmin();
?>
<div ng-controller="MyaccountController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Edit User
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

                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card dark_card">
                        <div class="card-body">

                            <div class="boann_input">
                                <label>Gebruikersnaam</label>
                                <input class="form-control input_boann" ng-model="user.username">
                            </div>

                            <div class="boann_input">
                                <label>Fivem Naam</label>
                                <input class="form-control input_boann" ng-model="user.name">
                            </div>

                            <div class="boann_input">
                                <label>Roepnummer</label>
                                <input class="form-control input_boann" ng-model="user.callsign">
                            </div>

                            <hr>

                            <div class="boann_input">
                                <label>Rank</label>
                                <select class="browser-default custom-select input_boann" ng-model="user.rank">
                                    <option value="academie">Academie</option>
                                    <option value="aspirant">Aspirant</option>
                                    <option value="surveillant">Surveillant</option>
                                    <option value="agent">Agent</option>
                                    <option value="hoofdagent">Hoofdagent</option>
                                    <option value="brigadier">Brigadier</option>
                                    <option value="inspecteur">Inspecteur</option>
                                    <option value="hoofdinspecteur">Hoofdinspecteur</option>
                                    <option value="commissaris">Commissaris</option>
                                    <option value="hoofdcommissaris">Hoofdcommissaris</option>
                                    <option value="eerste hoofdcommissaris">Eerste hoofdcommissaris</option>
                                </select>
                            </div>

                            <div class="boann_input">
                                <label>Role is only for admin perms</label>
                                <select class="browser-default custom-select input_boann" ng-model="user.role">
                                    <option value="user">Gebruiker</option>
                                    <option value="moderator">Moderator</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                            <hr>

                            <label>Document rechten</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" ng-checked="user.canEdit == 'true'" class="custom-control-input" id="edit" ng-model="user.setEdit">
                                <label class="custom-control-label" for="edit">Edit</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" ng-checked="user.canDelete == 'true'" class="custom-control-input" id="delete" ng-model="user.setDelete">
                                <label class="custom-control-label" for="delete">Delete</label>
                            </div>

                            <button ng-click="updateUser(user)" class="btn btn-sm btn-success">Update</button>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $view->footer(); ?>
