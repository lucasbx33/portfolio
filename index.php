<!DOCTYPE html>
<html lang="en">
	<?php include('./route.php') ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio</title>
	<link href="src/assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div className="App">
		<?php include('./src/component/Header.php') ?>
		
    	<main>
    	  <body>

    	  	<?php include('./src/component/Moi.php') ?>
			<?php include('./src/component/Projects.php') ?>
			<?php include('./src/component/Experience.php') ?>
			<?php include('./src/component/Competence.php') ?>

    	  </body>
		  <?php include('./src/component/Footer.php') ?>
    	</main>
    </div>
</body>
</html>