<!DOCTYPE php>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFT1147</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/utilitaires/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/utilitaires/css/style.css" type="text/css">
    <link rel="stylesheet" href="public/css/styles.css" type="text/css">
    <script src="public/javascript/fonctions.js"></script>
    <!-- Javascript -->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12 pb-5 d-flex justify-content-center ">
            <h2>Examen final IFT 1147</h2>
        </div>
        
        <div class="col-sm-12 pb-5 d-flex justify-content-center ">
            <h3>Marjolaine Hébert</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
            <button type="button" class="btn btn-primary mr-3" onclick="listerCode()">Question a</button>
            <button type="button" class="btn btn-secondary mr-3" onclick="listerMontreal()">Question b</button>
            <button type="button" class="btn btn-success mr-3" onclick="montrer('montrerForm');">Question c</button>
            <button type="button" class="btn btn-danger" onclick="montrer('montrerSupp');">Question d</button>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-sm-12 pb-5 d-flex justify-content-center ">
            <!-- -- Lister -- -->
            <div class="" id="lister">
                <form id="formLister" action="serveur/lister.php" method="POST"></form>
            </div>

            <div class="" id="lister">
                <form id="formListerM" action="serveur/listerMontreal.php" method="POST"></form>
            </div>
            <div class="" id="montrerForm">
                <h5>Le transporteur</h5>
                <hr>
                <select class="form-control" onChange="envoyerLister('categ',this.options[this.selectedIndex].value)">
                                        <option value="">Choisir ...</option>
                                        <option value="Limocar">Limocar Laurentides</option>
                                        <option value="airCanada">Air Canada</option>
                                        <option value="airFrance">Air France</option>
                                        <option value="LOT">LOT</option>
                                        <option value="panAm">Pan Am</option>
                                        <option value="voyageur">Voyageur</option>
                                        <option value="nationair">Nationair</option>
                                    </select>
            </div>

            
            <div class="" id="montrerSupp">
                <h5>Supprimer un code</h5>
                <hr>
                <form id="supprimer" name="supprimerForm" action="serveur/supprimer.php" method="POST" onsubmit="return validerNombre('codeS');">
                    <div class="mb-3">
                        <label for="codeS" class="form-label">Code à supprimer</label>
                        <div id="messageSupprimer">Entrez un nombre entre 1 et 9999</div>
                        <input type="text" class="form-control" id="codeS" name="code">
                    </div>
                    <button type="submit" class="btn btn-warning">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>

</html>