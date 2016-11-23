<?php
$dsn = 'mysql:host=localhost;dbname=lanparty';
$user = 'root';
$password = '';

try {
    $basededonnees = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = 'SELECT * FROM lieu';
$listeLieux = $basededonnees->query($sql);

?>

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
<style>

	#liste-lieux li, #liste-lieux li a
	{
		color:white;
		font-size:30px;
		font-weight:bold;
		text-decoration:none;
	}


</style>
</head>
<body>
<header class="entete-public">
	<ul class="menu">
		<li class="item texte jeux">
			<a href="#">Les jeux</a> 
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
		Choisissez votre Lan party
	</h1>
</header>



<ul id="liste-lieux">
<?php
    foreach ($listeLieux as $lieu) 
	{
		?>
		<li><a href="<?php echo $lieu['lien'];?>"><?php echo $lieu['nom'];?></a></li>
		<?php    
	}

?>
</ul>

</ul>
</body>
</html>
