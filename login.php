<?php 
    require_once "./libraries/config.php";
    $login      = new \classes\view\loginView;
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="fragment" content="!">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Politie Databank login</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="<?php echo THEMES; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo THEMES; ?>/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo THEMES; ?>/css/boann.min.css?v=<?php echo $_SERVER['REQUEST_TIME']; ?>" rel="stylesheet">
</head>
<body>
    <div class="application">
        <div class="background_container">
            <div class="fullpage_container">
                <div class="background_assets"></div>
            </div>
        </div>

        <div class="login_page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
                        <div class="card dark_card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <h1>Politie DataBank</h1>
                                </div>
                                
                                <?php if(!empty($_SESSION["error"])) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION["error"]; ?>                                    
                                    </div>
                                <?php endif; ?>
                                
                                <form action="" method="post">
                                    <div class="form-group boann_input">
                                        <label>Gebruikersnaam  :</label>
                                        <input class="form-control input_boann" type="text" name="username" >
                                    </div>

                                    <div class="form-group boann_input">
                                        <label>Wachtwoord :</label>
                                        <input class="form-control input_boann" type="password" name="password">
                                    </div>                                  
                                    
                                    <hr>

                                    <div class="form-group text-center">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Inloggen">
                                        <a class="btn btn-sm btn-primary">Wachtwoord vergeten</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="<?php echo THEMES; ?>/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo THEMES; ?>/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo THEMES; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo THEMES; ?>/js/mdb.min.js"></script>        
</body>
</html>
