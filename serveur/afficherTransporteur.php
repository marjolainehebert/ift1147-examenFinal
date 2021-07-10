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
                    <?php
                        require_once("bdconfig/connexion.inc.php");
                        $categories=[];
                        $categories["Limocar"]="Limocar Laurentides";
                        $categories["airCanada"]="Air Canada";
                        $categories["airFrance"]="Air France";
                        $categories["LOT"]="LOT";
                        $categories["panAm"]="Pan Am";
                        $categories["voyageur"]="Voyageur";
                        $categories["nationair"]="Nationair";
                        
                        $requeteSort="SELECT * FROM voyages WHERE categorie=?";
                        $nomFiltre="Lister les films de la catégorie ".$valeurPar;

                            echo '
                            <div class="d-flex  justify-content-between align-items-baseline mb-5 pb-5">
                                <div><h3 style="display:inline-block;" class="mt-2 mb-3"><a href="../..//public/pages/admin.php" class="dark-link">Admin</a> > '.$nomFiltre.'</h3></div>
                                <div><a href="../index.php" class="btn btn-outline-warning">Revenir en arrière</a></div>
                            </div>
                            ';
                            
                            $stmt = $connexion->prepare($requeteSort);
                            $stmt->bind_param("s", $valeurPar);
                            $stmt->execute();
                            $transporteurs = $stmt->get_result();
                            
                                
                            $rep='<table class="table table-striped">';
                            $rep.='<tr><th>Code</th><th>Départ</th><th>Destination</th><th>Transporteur</th></tr>';
                                $i=0;
                                
                                $rep.=' <div class="row">';
                                while($ligne=mysqli_fetch_object($transporteurs)){
                                    $rep.="<tr><td>".($ligne->code)."</td><td>".($ligne->depart)."</td><td>".($ligne->destination)."</td><td>".($ligne->transporteur)."</td></tr>";
                                }

                                    $rep.="</div>";//fermer le dernier row
                                $rep.="</div>";//fermer le container
                                mysqli_free_result($transporteurs);
                            }catch (Exception $e){
                                    $rep.='<div class="col-sm">';
                                        $rep.='<div class="card" style="width: 18rem;">';
                                                $rep.='<div class="card-body">';
                                                    $rep.='<h5 class="card-title">Erreur</h5>';
                                                    $rep.='<p class="card-text">Problème pour lister les films</p>';
                                                $rep.='</div>';
                                        $rep.='</div>';
                                    $rep.='</div>';
                            }finally {
                                mysqli_close($connexion);
                                echo $rep;
                                //header("Location:/tp2/index.php?liste=$rep");
                            }
                ?>
                </div>
            </div>
        </div>
    </section>
    
</body>