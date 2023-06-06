<?php
require_once ("connexion.php");

if (!empty($_GET['id'])) {

	$id = $_GET['id'];

	$query1 = $db->query("SELECT * FROM `ads` WHERE `ads`.`id` = $id");
	$update = $query1->fetchAll();
	$update = $update[0];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/CSS/read.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  

</head>
<body>


    <header>
        <img class="logo" src="assets/images/logo.png" alt="logo">
    </header>


    <main>
        <h1><?php echo $update["title"]; ?></h1>
        <section>
            <article>
                <div class="back">
                    <img src="assets/images/velo.png" alt="1" class="backgroundvelo">
                </div>
                <div>
                    <div>
                        <a href="index.php">RETOUR</a>
                        <br>
                        <br>
                        <div class="flex_box">
                            <p class="description"><?php echo $update["text"]; ?></p>
                            <img src="assets/images/velo.png" alt="velo" width="25%" class="img_droite">
                        </div>

                        <br><br>
                        <p class="texte_bas">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed pulvinar mauris, id vehicula leo. Morbi at sem imperdiet, tempus felis nec, ornare nibh. Ut quis convallis lorem. Praesent vel congue nisi. Nulla facilisi. Sed placerat velit quis tristique posuere. Integer quis imperdiet erat, sed laoreet l acus. Morbi et mauris a mi faucibus iaculis a quis tellus. Mauris hendrerit risus vitae nisi efficitur, ac eleifend purus gravida. Etiam in urna ultrices velit finibus ultrices. Vestibulum rhoncus neque quis felis varius, vitae accumsan lectus cursus. Vestibulum sodales eleifend nisi mattis suscipit.</p>
                    </div>
                </div>
            </article>  
        </section> 
    </main>
    <footer>
        <p>Site d'annonces étudiant</p>
    </footer>
</body>
</html>

