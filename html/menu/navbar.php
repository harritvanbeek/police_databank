<div class="boann_navbar">
    <div class="navbar_container" ng-controller="NavbarController">
        <div class="navbar_left navbar_side">
            <a ng-click="sidebar(sbar)" class="navbariconbutton_button"><i class="fas fa-bars"></i></a>
            <a href="dasboard.php" class="navbariconbutton_button white-text"><i class="fas fa-home"></i></a>
            <a ng-click="history()" class="navbariconbutton_button">
                <i class="fas fa-arrow-alt-circle-left"></i>
            </a>
        </div>

        <div class="navbar_right navbar_side">
            <a ng-if="me.premissions === 'admin'" class="navbariconbutton_button white-text" href="admin.php"><i class="fas fa-cogs"></i></a>

            <div class="navbaraccountButton_avatarContainer">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect NavBarIconButton-button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span class="clearfix d-none d-sm-inline-block" ng-bind-html="me.name"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item waves-effect waves-light" href="my-account.php">My account</a>
                            <a class="dropdown-item waves-effect waves-light" href="logout.php">Log Out</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
