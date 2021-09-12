<?php
include_once ("inc/header.php");

include_once("inc/connexion.php");

$categories = $bdd->query('SELECT id_category, value FROM category;')->fetchAll(PDO::FETCH_ASSOC);
// $create_dt = date("Y-m-d H:i:s A", strtotime($_POST['post_date']." ".$_POST['post_time']));
// $phpdate = strtotime( $mysqldate );
// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );


?>

	<div class="row">
		<div class="col-md-6 mx-auto">
			<h2 class="text-warning text-center"><strong>Add ancient pyramid :</strong></h2><br>
			<form class="border border-warning rounded p-4" action="traitement_annonce.php" method="POST" enctype="multipart/form-data">
                <p>
					<label for="title">Titre :</label>
					<input placeholder="(champ obligatoire)" type="text" name="title" id="title" class="form-control" required>
				</p>
                <p>
					<label for="description">Description :</label>
					<input placeholder="(champ obligatoire)" type="text" name="description" id="description" class="form-control" required>
				</p>
				<p>
					<label for="postcode">Code Postal :</label>
					<input placeholder="(champ obligatoire)" type="number" name="postcode" id="postcode" min="01000" max="98000" required>
				</p>
				<p>
					<label for="city">Ville :</label>
					<input placeholder="(champ obligatoire)" type="text" name="city" id="city" required>
				</p>

				<p>
					<label class="dark-text" for="category">Catégorie :</label>
					<select class="browser-warning" name="category" required>
						<option value="" selected disabled>Sélectionnez une catégorie</option>
                        <!-- <option value="vente" selected disabled>Vente</option>
                        <option value="location" selected disabled>Location</option> -->
						<?php foreach ($categories as $category): ?>
							<option value='<?= $category['id_category']; ?>' ><?= $category['value']; ?></option>
						<?php endforeach; ?>
					</select>
				</p>

                <p>
					<label for="price">PRIX :</label>
					<input placeholder="(champ obligatoire)" type="number" name="price" id="price" min="1" required>
				</p>

				<p>
					<label for="reservation_message">Réservation :</label>
					<input placeholder="message" type="text" name="reservation_message" id="reservation_message" class="form-control" >
				</p>
				
				<p class="d-flex justify-content-around">
					<input type="submit" class="btn btn-warning text-center" name="envoyer" value="envoyer" id="envoyer">
					<input type="button" class="btn btn-outline-warning text-center"
							onclick="window.location.replace('index.php')" value="ANNULER" />
				</p>
			</form>
		</div>
	</div>
</div>