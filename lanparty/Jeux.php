<!DOCTYPE html>

<html lang="fr" dir="ltr">
<head>
<meta charset="UTF-8" />
<title>Lan Party Matane</title>
<script></script>
<link rel="stylesheet" href="normalize.css" />
<style></style>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
<meta content='width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui' name='viewport'>
<link rel="stylesheet" media="all" href="style.css" />
<script>
</script>
</head>
<body>
<header class="entete-public">
	<ul class="menu">
		<li class="item texte jeux">
			<a href="index.html">Les jeux</a> 
		</li>
		<li class="item texte autres-jeux">
			<a href="#">Les "autres" jeux</a>
		</li>
		<li class="item texte bouffe">
			<a href="#">La bouffe</a>
		</li>
		<li class="item important">
			<img class="logo" src="image/steam2-nouveau.svg" alt="Steam de Matane"/>
		</li>
		<li class="item texte dates">
			<a href="#">Les dates  </a>
		</li>
		<li class="item texte lieux">
			<a href="#">Les lieux</a>
		</li>
		<li class="item texte contact">
			<a href="#">Contact</a>
		</li>
	</ul>
	<h1>
		Inscrivez-vous &agrave; votre jeu
	</h1>
	
</header>

<?php
	if(isset($_POST['courriel']))
	{?>
	<h2 class="confirmation">
		Vous &ecirc;tes inscrit &agrave; votre jeu!
	</h2>
	<p>
		<label for="nom">Votre nom</label>
		<input type="text" id="nom" name="nom" placeholder="Superman" readonly value="<?php echo $_POST['nom'];?>"/>
	</p>
	<p>
		<label for="nom">Votre courriel</label>
		<input type="email" id="courriel" name="courriel" readonly value="<?php echo $_POST['courriel'];?>"/>
	</p>
	<?php
	}
	?>	


<ul class="liste-vignette-jeu">
	<li class="vignette-jeu">
		<?php
		if(isset($_POST['courriel']))
		{
			$id_jeu = $_POST['id-jeu'];
		}
		else
		{
			$id_jeu = $_GET['id'];
		}
		
		$vignette_jeu_affiche ="";
		$date_jeu = "";
		switch ($id_jeu) {
			case 1:
				$vignette_jeu_affiche = "ClashofHeroes.jpeg";
				$date_jeu = "1 d&eacute;cembre 2015";
				break;
			case 2:
				$vignette_jeu_affiche = "GangBeasts.jpg";
				$date_jeu = "3 d&eacute;cembre 2015";
				break;
			case 3:
				$vignette_jeu_affiche = "MonacoWhatsYoursIsMine.jpg";
				$date_jeu = "6 d&eacute;cembre 2015";
				break;
			case 4:
				$vignette_jeu_affiche = "Nidhogg.jpg";
				$date_jeu = "7 d&eacute;cembre 2015";
				break;
			case 5:
				$vignette_jeu_affiche = "SamuraiGunn.png";
				$date_jeu = "8 d&eacute;cembre 2015";
				break;
			case 6:
				$vignette_jeu_affiche = "soccertron.jpg";
				$date_jeu = "13 d&eacute;cembre 2015";
				break;
			case 7:
				$vignette_jeu_affiche = "SpeedRunners.jpg";
				$date_jeu = "15 d&eacute;cembre 2015";
				break;
			case 8:
				$vignette_jeu_affiche = "Sportsfriends.png";
				$date_jeu = "17 d&eacute;cembre 2015";
				break;
			case 9:
				$vignette_jeu_affiche = "STARWHAL.jpg";
				$date_jeu = "19 d&eacute;cembre 2015";
				break;
		}
		?>
		
		<img class="vignette-jeu-affiche" src="image/<?php echo $vignette_jeu_affiche;?>" alt="<?php echo $vignette_jeu_affiche;?>"/>
		<ul class="liste-jeu-detail">
			<li class="jeu-detail texte date">
				<?php echo $date_jeu;?>
			</li>
		</ul>
		
	</li> <!-- vignette-jeu -->
</ul>

	<?php
	if(!isset($_POST['courriel']))
	{	
	?>
<form class="saisie" action="Jeux.php" method="post">
	<input type="hidden" id="id-jeu" name="id-jeu" value="<?php echo $_GET['id'];?>" />
	<p>
		<label for="nom">Votre nom</label>
		<input type="text" id="nom" name="nom" placeholder="Superman" required maxlength="20" />
	</p>
	<p>
		<label for="nom">Votre courriel</label>
		<input type="email" id="courriel" name="courriel" placeholder="Superman@gmail.com" required maxlength="70" />
	</p>
	<p>
		<input type="submit" id="inscription" name="inscription" value="Insciption" />
	</p>
</form>
	<?php
	}			
	?>
</body>
</html>
