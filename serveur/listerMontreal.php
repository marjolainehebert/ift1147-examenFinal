<!DOCTYPE php>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/utilitaires/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/utilitaires/css/style.css" type="text/css">
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css">
    <script src="../public/javascript/fonctions.js"></script>
    <script src="../public/javascript/panier.js"></script>
</head>

<body>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex  justify-content-between align-items-baseline">
                        <div><h3 style="display:inline-block;" class="mt-2 mb-3">Lister les transporteur qui partent de Montréal</h3></div>
                        <div><a href="../index.php" class="btn-sm btn-warning">Revenir en arrière</a></div>
                    </div>
                    
                    <?php
                        require_once("bdconfig/connexion.inc.php");

                        $ville='Montreal';

                        $rep='<table class="table table-striped">';
                        $rep.='<tr><th>Transporteur</th></tr>';
                        $requete="SELECT * FROM voyages";
                        $liste=mysqli_query($connexion,$requete);
                            while($ligne=mysqli_fetch_object($liste)){
                                if ($ligne->depart==$ville){
                                    $rep.="<tr><td>".$ligne->transporteur."</td></tr>";
                                }                        
                            }
                        $rep.="</table>";
                        echo $rep;
                    ?>
                </div>
            </div>
        </div>
    </section>
    
</body>