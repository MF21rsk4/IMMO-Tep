<?php
// if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }

include_once("inc/connexion.php");




//champs obligatoires
if(	isset($_POST['title']) && !empty($_POST['title']) &&
	isset($_POST['description']) && !empty($_POST['description']) &&
	isset($_POST['postcode']) && !empty($_POST['postcode']) &&
	isset($_POST['city']) && !empty($_POST['city']) &&
	isset($_POST['category']) && !empty($_POST['category']) &&
	isset($_POST['price']) && !empty($_POST['price'])
    ) {

	// vérification de la validité des différentes variables
	if (
		filter_var($_POST['price'], FILTER_VALIDATE_INT, array("options"=>array("min_range"=>1))) &&
		filter_var($_POST['postcode'], FILTER_VALIDATE_INT, array("options"=>array("min_range"=>01000, "max_range"=>98000), str_pad( 5, '0', STR_PAD_LEFT)))
	) {
		// On s'occupe maintenant des variables en les filtrant
		$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
		$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
		$postcode = filter_var($_POST['postcode'], FILTER_SANITIZE_NUMBER_INT);
		$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
		$price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
        $reservation_message = filter_var($_POST['reservation_message'], FILTER_SANITIZE_STRING);
		$idcategorie = $_POST['category'];

        $add_annonce = $bdd->prepare('INSERT INTO advert(
            title, description, postcode, city, price, reservation_message, category_id) 
            VALUES (:title, :description, :postcode, :city, :price, :reservation_message, :category)');
		
		//bind
		$add_annonce->bindValue(':title',$title, PDO::PARAM_STR);
        $add_annonce->bindValue(':description',$description, PDO::PARAM_STR);
		$add_annonce->bindValue(':postcode',$postcode, PDO::PARAM_INT);
		$add_annonce->bindValue(':city',$city, PDO::PARAM_STR);
		$add_annonce->bindValue(':price',$price, PDO::PARAM_INT);
		$add_annonce->bindValue(':reservation_message',$reservation_message, PDO::PARAM_STR);
		$add_annonce->bindValue(':category', $idcategorie, PDO::PARAM_INT);

        $add_annonce->execute();
        echo ('<p>--[ PYRAMID ENREGISTRED ]--<p><br><hr>');
        echo ('<a class="nav-link active" href="index.php">retour</a>');

        $retour = ($add_annonce->rowCount());
        
        $add_annonce->closeCursor();
        // return ($retour);

                // METTRE LES CATEGORIES AVEC LEURS ID (SQL) !!!


    }} else {
        echo ('impossible <br><hr>');
        echo ('<a class="nav-link active" href="index.php">retour</a>');
    }


