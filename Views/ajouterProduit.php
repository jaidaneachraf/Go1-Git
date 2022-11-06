<?php
    include_once '../Model/Produit.php';
    include_once '../Controller/ProduitController.php';

    $error = "";

    // create adherent
    $produit = null;

    // create an instance of the controller
    $produitC = new ProduitController();
    if (
        isset($_FILES["image"])&&
		isset($_POST["nom"]) &&		
        isset($_POST["prix"]) 		
    
		
    ) {
        if (
            !empty($_FILES["image"])&& 
			!empty($_POST['nom']) &&
            !empty($_POST["prix"]) 
        ) {
            
                $textFile = ['png', 'jpg','jpeg','bmp'];
                 $text = 0;
                $file = pathinfo($_FILES['image']['name']);
                if(isset($file['extension']))
                {
      
      
      
                    if (isset($file['extension'], $textFile) && $_FILES['image']['size'] <= 5000000)
                    $text = 1;
                    if($text)
                    {
                    $localFile = 'img/';
                    $pathImage = $localFile . strtolower(str_replace(' ', '',$_POST["nom"]) . '.' . $file['extension']);
                    move_uploaded_file($_FILES['image']['tmp_name'], $pathImage);
            $produit = new Produit(
                $pathImage,
				$_POST['nom'],
                $_POST['prix'], 
			
            );
            $produitC->ajouterproduit($produit);
           
        }
        else
            $error = "Missing information";
    }

}

    }
 
    
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin </title>
    <meta name="prix" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li>
                    <h3 class="menu-title"> Éléments IU</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                            <li><i class="fa fa-table"></i><a href="table-Produit.php">Client</a></li>
                            <li><i class="fa fa-table"></i><a href="table-Produit.php">User</a></li>
                            <li><i class="fa fa-table"></i><a href="table-panier.html">Panier</a></li>
                            <li><i class="fa fa-table"></i><a href="afficherProduitB.php">produit</a></li>
                            <li><i class="fa fa-table"></i><a href="afficherCategorieB.php">Categorie</a></li>
                            <li><i class="fa fa-table"></i><a href="table-marketing.html">Marketing</a></li>
                            <li><i class="fa fa-table"></i><a href="table-service.html">Service après-vente</a></li>
                        </ul>
                    </li>


                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Graphiques</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_produit.html"> GraphiqueProduit</a></li>

                        </ul>
                    </li>

                    <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">S'identifier</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">S'inscrire</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Mot De Passe Oublier</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Espace Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Espace Admin</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active"> table de donnée </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


            <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12" style="margin-left:300px">
                <h2  class="tm-block-title d-inline-block">Ajouter produit</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-lg-12">
                <form name="upload" action="" class="tm-edit-product-form" enctype="multipart/form-data" method="POST">
                <div class="form-group lg-12">
                    <label
                      for="image"
                      >image du produit
                    </label>
                    <input type="file" name="image" id="image">

                  </div>
                  <div class="form-group lg-12">
                    <label
                      for="nom"
                      >nom du produit
                    </label>
                    <input type="text" name="nom" id="nom" maxlength="20" class="form-control validate">

                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="prix"
                      >Prix</label
                    >

                    <input type="number" name="prix" id="prix" maxlength="1"  class="form-control validate"></input>
                  
                  </div>
            
                 
                  
              </div>
             
              <div class="col-12">
                 
                <input type="submit" href="ajouterProduit.php"class="btn btn-dark btn-block text-uppercase" value="Ajouter Produit" ></input>
            </div>

            </form>
                                            

            </div>
          </div>
        </div>
      </div>
    </div>



                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
