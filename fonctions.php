
<?php
	$dsn = 'mysql:host=localhost;dbname=world;charset=utf8';
	$pdo = new PDO($dsn, 'root', 'rammstein');



		$sql = 'SELECT SUM(Population) as pop from country';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		
		$sql = 'SELECT COUNT(Name) as pays from country';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$rowset=$stmt->fetch(PDO::FETCH_ASSOC);
		
		$sql = 'SELECT COUNT(Name) as ville from city';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$rowsetville=$stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT COUNT(DISTINCT Continent) as continent from country';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$rowsetcontinent=$stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT COUNT(DISTINCT GovernmentForm) as Gov from country';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$rowsetgov=$stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../world/styles.css">
</head>
<body>
	<main>
		<section>
			<article id="monde">
				<h1>Monde</h1>
				<p>Population totale : <?php echo $row['pop'] ?> </p>
				<p>Nombre de villes enregistrées : <?php echo $rowsetville['ville'] ?></p>
				<p>Nombre de pays : <?php echo $rowset['pays'] ?> </p>
				<p>Nombre de continents : <?php echo $rowsetcontinent['continent'] ?></p>
				<p>Nombre de monarchies : <?php echo $rowsetgov['Gov'] ?></p>
			</article>
			<article id="monarch">
				<p>Monarchie non constitutionnelles existant dans le monde : </p>
				<p>Asia : </p>
				<p>Africa : </p>
				<p>oceania : </p>
			</article>
		</section>
	</main>
</body>
</html>