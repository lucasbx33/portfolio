<?php

require_once ("connexion.php");

if (!empty($_GET['id'])) {

	$id = $_GET['id'];

	$query1 = $db->query("SELECT * FROM `ads` WHERE `ads`.`id` = $id");
	$update = $query1->fetchAll();
	$update = $update[0];
	
if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['ann']) ) {

		$titre_create = $_POST['name'];
		$mail_create =  $_POST['mail'];
		$message_create = $_POST['ann'];
		


		$query = $db->prepare("UPDATE `ads` SET `title` = :title, `email` = :email , `text` = :texto  WHERE `ads`.`id` =  :id");
		$query->execute(['title'=>$titre_create,'email'=>$mail_create,'texto'=>$message_create,'id'=>$update["id"]]);
		header("refresh:0");
	}

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/CSS/create.css">
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
        <h1>MODIFICATION</h1>
        <section>
            <div class="back">
                <img src="assets/images/velo.png" alt="1" class="backgroundvelo">
            </div>
            <div>
                <a href="index.php">Retour</a>
            </div>
        </section>
        <section>
            <div class="mid">
                <article>
                    <p>tous les champs sont obligatoires</p>
                    <br>
                    <form action="#" method="POST">
                        <div class="flex_box">
                            <div>
                                <label for="name">Titre de l'annonce</label>
                                <br>
                                <input type="text" name="name" class="titre" placeholder="Mon annonce" autocomplete="off" required>
                            </div>

                            <div > 
                                <label for="year">annonce</label>
                                <br>
                                <textarea type="text" cols="40" rows="10" name="ann" class="ann" placeholder="Mon annonce ici..." autocomplete="off" required></textarea>
                            </div>
                        
                        
                            <div >
                                <label for="year">Email</label>
                                <br>
                                <input type="email" name="mail" class="email" placeholder="mon-email@gmail.com" autocomplete="off" required>
                            </div>
                        
                        </div>
                        
                            <button class="but">Envoyer</button>
                    </form>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <p>Site d'annonces étudiant</p>
    </footer>
</body>
</html>

