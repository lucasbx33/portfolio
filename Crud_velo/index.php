<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/CSS/styles.css">
    <title>Velo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <?php
    require_once ("connexion.php")
    ?>
</head>
<body>

    <header>
        <img class="logo" src="assets/images/logo.png" alt="logo">
    </header>


    <main>
            <h1>Liste des dernières annonces</h1>



        <section>
            <a href="create.php" class="ajouter">AJOUTER</a>

            <div class="parentArticles">
            <?php
                	$query = $db->query("SELECT * FROM ads");
                	$table = $query->fetchAll();

                    foreach ($table as $table){

                        echo "<article class=article>
                            <div class=imageArticle>
                                <a href=read.php?id=",$table["id"],"><div class=voile></div></a>        
                                <img src=assets/images/velo.png alt=velo>
                                <a class=voir href=read.php?id=",$table["id"],"><img src=assets/images/eye.png alt=image></a>
                                
                            </div>
                            <h3>",$table["title"],"</h3>
                            <div class=parentBoutonsArticles>
                                <a class=boutonArticles href=read.php?id=",$table["id"],">Voir</a>
                                <a class=boutonArticles href=update.php?id=",$table["id"],">Modifier</a>
                                <a class=boutonArticles href=supprimer.php?id=",$table["id"],">Supprimer</a>
                            </div>
                        </article>";
                        }
                        ?>
                

            </div>
        </section>
    </main>


    <footer>
        <p>Site d'annonces étudiant</p>
    </footer>


</body>
</html>
