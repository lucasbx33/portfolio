
<?php 
require_once ("connexion.php");
	

	if (!empty($_POST['mail']) && !empty($_POST['name']) && !empty($_POST['ann']) && isset($_POST['cgu'])) {

		$titre_create = $_POST['name'];
		$mail_create =  $_POST['mail'];
		$message_create = $_POST['ann'];


		$query = $db->query("INSERT INTO `ads` (`id`, `title`, `email`, `text`) VALUES (NULL, '$titre_create', '$mail_create', '$message_create'); ");
		while ($data = $query->fetch()) {
				var_dump($data);
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
        <h1>CREATION</h1>
        <section>
            <div class="container">
                <div class="form-container">
                <a href="index.php">RETOUR</a>
                    <article>
                        <br>
                        <p>tous les champs sont obligatoires</p>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="name">Titre de l'annonce</label>
                                <br>
                                <input type="text" name="name" class="titre" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="year">annonce</label>
                                <br>
                                <textarea type="text" cols="40" rows="10" name="ann" class="ann" autocomplete="off"
                                    required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="year">Email</label>
                                <br>
                                <input type="email" name="mail" class="email" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="cgu">
                                    <input type="checkbox" name="cgu" required>
                                    J'accepte les CGU
                                </label>
                            </div>

                            <input type="submit" class="but" href="index.php" value="envoyer">
                        </form>
                    </article>
                </div>
                <div class="image-container">
                    <img src="assets/images/velo.png" alt="1" class="backgroundvelo">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>Site d'annonces étudiant</p>
    </footer>
</body>

</html>
