<?php 
include("conn.php");

//var_dump($_FILES);
if(isset($_POST['valider'])){
	//nomhosp	description	services	mail	tel	web	imag	ville	qtier
	//	identif	mdp	mdpC
	$nomP = htmlspecialchars($_POST['nomPh']);
	$description = htmlspecialchars($_POST['description']);
	$situgeo = htmlspecialchars($_POST['situgeoP']);
	$email = htmlspecialchars($_POST['mail']); //optionnel
	$tel = htmlspecialchars($_POST['tel']);
	$web = htmlspecialchars($_POST['web']); //optionnel	
	$ville =  htmlspecialchars($_POST['ville']);
	$id = htmlspecialchars($_POST['identif']);
	$passe =  md5(($_POST['mdp']));
	$passeC =  md5(($_POST['mdpC']));

	
	if(!empty($nomP) and !empty($description) and !empty($situgeo) and !empty($tel) and !empty($ville) and !empty($id) and !empty($passe) and !empty($passeC) ){
		if($passe==$passeC){
			$reqt = $db->prepare('select * from pharmacie where idHP=? OR emailP=?');
			$reqt->execute(array($id, $email));
			$compt = $reqt->rowcount();
			if($compt==0){
				if(!empty($_FILES)){
				$file_name = $_FILES["imag"]["name"];
				$file_extension = strrchr($file_name, ".");

				$file_tmp_name = $_FILES["imag"]["tmp_name"];
				$file_dest = 'imagesPhar/'.$file_name;

				$extension_autorisees = array('.png' ,'.PNG','.jpg', '.JPG','.jpeg', '.JPEG', '.svg', '.SVG');
				if(!empty($file_name)){
					if(in_array($file_extension, $extension_autorisees)){
					if(move_uploaded_file($file_tmp_name, $file_dest)){  //`idP`, `nomP`, `descriptP`, `situ_geoP`, `villeP`, `img_urlP`, `telP`, `emailP`, `sitewebP`, `mdpP`
						$req = $db->prepare("insert into pharmacie(idP, nomP,descriptP , situ_geoP, villeP, img_urlP, telP, emailP, sitewebP, mdpP) values(?,?,?,?,?,?,?,?,?,?)");
						$req->execute(array($id, $nomP, $description, $situgeo, $ville, $file_dest, $tel, $email, $web, $passe));
						$erreur = "Envoi de fichier réussi !! <br> Compte créé avec succès.";
					}else{
						$erreur= "Une erreur est survenue lors de l'envoi du fichier";
					}
				}else{
					$erreur= "Seul les fichiers images(png, PNG, svg, jpeg, JPEG, jpg, JPG ) sont autorisés";
				}
			}else{
				$erreur="Veuillez insérer une image";
			}
				
			}else{}
			}
			else{ //else if compt==0
				$erreur = "Ce identifiant a déjà été utilisé, Choisissez autres ";
			}
		}else{
			$erreur = "Les mots de passe ne correspondent pas";
		}
	}else{
		$erreur = "Veuillez renseigner tous les champs obligatoires";
	}
}
?>

<div class="contact-form" style="padding-left: 3em; padding-bottom: 3em; padding-right: 3em; border: red; background-color: #00561B; ">
	<div class="py-2 text-center">
	    <h1 style="color: #2C75FF; font-size: 2.3em; font-family: Algerian; ">CREER UN COMPTE POUR VOTRE PHARMACIE</h1>
	</div>

	<div style="color: red;text-align: center; font-size: 1.3em;" ><em>
		<?php if(isset($erreur)){echo $erreur;}?></em>	
	</div>
	<form class="needs-validation " method="POST" enctype="multipart/form-data" style="margin: auto;">
		<div class="row">
			<div class="col-md-5 order-md-2 mb-4" style="margin-left: 5em; padding-top: 2em;">
			    <div style="border: 1px solid #CECECE; padding: 1em;">
				    <h4 class="d-flex justify-content-between align-items-center mb-3">
				    <span class="text-muted">Pour vous connecter</span>
				    </h4>
				    <div class="mb-3">
					    <label for="identif">IDENTIFIANT DE CONNEXION</label>
						<input name="identif" type="text" class="form-control" id="identif" value="<?php if(isset($_POST['identif'])){ echo $_POST['identif'];} ?>" placeholder="exemple : PharmAciel999"  required>
					</div>

				    <div class="mb-3">
				    	<label for="mdp">MOT DE PASSE</label>
						<input name="mdp" type="password" class="form-control" id="mdp" value="<?php if(isset($_POST['mdp'])){ echo $_POST['mdp'];} ?>" placeholder="********" required>
				    </div>

			        <div class="mb-3">
			        	<label for="mdpC">CONFIRMER VOTRE MOT DE PASSE</label>
						<input name="mdpC" type="password" class="form-control" id="mdpC" value="<?php if(isset($_POST['mdpC'])){ echo $_POST['mdpC'];} ?>" placeholder="********" required>
					</div>
				</div>
			</div>

	    	<div class="col-md-6 order-md-1">
			    <div class="row">
			        <div class="col-md-5 mb-3">
				        <label for="nomPh">NOM DE LA PHARMACIE</label>
					    <input type="text" class="form-control" name ="nomPh" id="nomPh" placeholder="nom de votre pharmacie" value="<?php if(isset($_POST['nomPh'])){echo $_POST['nomPh'];} ?>" required>
				    </div>
					<div class="col-md-7 mb-3">
						<label for="description">PRESENTATION/DESCRIPTION</label>
						<br>
						<textarea name="description" class="form-control" id="description" placeholder="présentez les différents types de produits que vous offrez..." value="<?php if(isset($_POST['description'])){ echo $_POST['description'];} ?>" required></textarea>  	
					</div>
		        </div><br/>

			    <div class="row">
				    <div class="col-md-5 mb-3">
				    	<label for="ville"> VILLE</label>
				  		<br>
				  		<input name="ville" type="text" class="form-control" id="ville" value="<?php if(isset($_POST['ville'])){ echo $_POST['ville'] ;} ?>" placeholder="votre ville" required>
				    </div>
					<div class="col-md-7 mb-3">
				    	<label for="situgeoP"> SITUATION GEOGRAPHIQUE <em style="color: blue;" class="text-muted">(*optionnel)</em></label>
				  		<br>
				  		<input name="situgeoP" type="text" class="form-control" id="situgeoP" value="<?php if(isset($_POST['situgeoP'])){ echo $_POST['situgeoP'] ;} ?>" placeholder="votre adresse complete" >
					</div>

		        </div>

		        <div class="mb-3">
			        <label for="imag">INSERER UNE IMAGE </label>
			        <br>
			        <input name="imag" type="file" class="form-control" id="imag" placeholder="choisir une image" required>
			    </div>

			    <hr class="mb-3">
			    <div class="mb-3">
			        <h4><u>CONTACTS :</u></h4>	
			        <label for="tel">TELEPHONE</label>
			        <input name="tel" type="text" class="form-control" id="tel" placeholder="00000000" value="<?php if(isset($_POST['tel'])){echo $_POST['tel'];} ?>" required>
			    </div>

			    <div class="mb-3">
					<label for="mail">E-MAIL &nbsp<em style="color: blue;" class="text-muted">(*optionnel)</em> </label>
					<br>
					<input name="mail" type="email" class="form-control" id="mail" value="<?php if(isset($_POST['mail'])){ echo $_POST['mail'] ;} ?>" placeholder="vous@gmail.com">
			    </div>

			    <div class="mb-3">
			        <label for="webadr">SITE WEB &nbsp<em style="color: blue;" class="text-muted">(*optionnel)</em></label>
			        <br>
					<input name="web" type="text" class="form-control" id="webadr" value="<?php if(isset($_POST['web'])){ echo $_POST['web'] ;} ?>" placeholder="votre site web">
			    </div>

		    </div>
		</div>

	    <br/>
	    <hr class="mb-3">
		<center><input name="valider" type="submit" value="Valider" class="btn btn-primary btn-lg"  style="width: 20em;"></center>
	</form> 
</div>
