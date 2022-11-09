<?php
    require_once "./libraries/config.php";    
    $view->header();   
    $view->isAdmin();   
?>

<style>
    optgroup, option {
      background-color: #2d2d2d !important;
    }
</style>
<div ng-controller="AdminController">
    <div class="PageHeader-pageHeader">
        <div class="PageHeaderLeft-pageHeaderLeft">
            Admin Dasboard
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
                <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#centralModalSm">Nieuw Gebruiker</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Role</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="user in users | filter:search">
                            <td class="text-white" ng-bind-html="user.name"></td>
                            <td class="text-white" ng-bind-html="user.role"></td>
                            <td class="text-white" ng-bind-html="user.rank"></td>
                            <td>
                                <a class="text-white">Edit</a>
                                <a class="text-white">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>




<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Nieuw Gebruiker</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
            <div class="boann_input">
                <label>Gebruikersnaam</label>
                <input class="form-control input_boann" ng-model="form.username"> 
            </div> 

            <div class="boann_input">
                <label>Fivem Naam</label>
                <input class="form-control input_boann" ng-model="form.name"> 
            </div> 

            <div class="boann_input">
                <label>Wachtwoord</label>
                <input class="form-control input_boann" ng-model="form.password"> 
            </div>

            <div class="boann_input">
                <label>Rank</label>
                <select class="browser-default custom-select input_boann" ng-model="form.rank">
                    <option value="academie">Academie</option>
                    <option value="aspirant">Aspirant</option>
                    <option value="surveillant">Surveillant</option>
                    <option value="agent">Agent</option>
                    <option value="hoofdagent">Hoofdagent</option>
                    <option value="brigadier">Brigadier</option>
                    <option value="inspecteur">Irigadier</option>
                    <option value="hoofdinspecteur">Hoofdinspecteur</option>
                    <option value="commissaris">Commissaris</option>
                    <option value="hoofdcommissaris">Hoofdcommissaris</option>
                    <option value="eerste hoofdcommissaris">Eerste hoofdcommissaris</option>
                </select>
            </div>
            
            <div class="boann_input">
                <label>Role</label>
                <select class="browser-default custom-select input_boann" ng-model="form.role">
                    <option value="user">Gebruiker</option>
                    <option value="moderator">Moderator</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button ng-click="saveUser(form)" type="button" class="btn btn-primary btn-sm">Opslaan</button>
      </div>
    </div>
  </div>
</div>

</div>

<?php $view->footer(); ?>

