<!DOCTYPE php>
<html lang="fr">
    <head>
		<meta charset="UTF-8">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
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
        <!-- Javascript -->
    </head>

<body>

<?php
	require_once("../bdconfig/connexion.inc.php");
	$num=$_POST['code'];	
	$requete="SELECT * FROM voyages WHERE code=?";
	$statement=$connexion->prepare($requete);
	$statement->bind_param("i", $num);
	$statement->execute();
	$result = $statement->get_result();
	if(!$ligne = $result->fetch_object()){
		mysqli_close($connexion);
		echo "Le code <strong>".$num."</strong> ne se retrouve pas dans notre base de donnée. Veuillez réessayer.";
		exit;
	}

	$requete="DELETE FROM voyages WHERE code=?";
	$statement = $connexion->prepare($requete);
	$statement->bind_param("i", $num);
	$statement->execute();
	mysqli_close($connexion);
	echo "Le voyage <strong>".$num."</strong> a été supprimé.";
?>



</body>