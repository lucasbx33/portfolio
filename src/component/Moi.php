<!DOCTYPE html>
<html>
<head>
    <title>Copier dans le presse-papiers</title>
    <script>
        function copierDansPressePapier() {
            var texteACopier = document.getElementById("texteACopier").getAttribute("data-texte");
            navigator.clipboard.writeText(texteACopier)
                .then(function() {
                    alert("Le texte a été copié dans le presse-papiers !");
                })
                .catch(function(error) {
                    console.error("Erreur lors de la copie dans le presse-papiers : ", error);
                });
        }
    </script>
</head>
<body>
    <section id="Moi">
        <div class="container">
            <div class="hero-content">
                <img src="src/assets/img/lucas.png" alt="Photo"/>
            </div>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/lucasreynaud/" target="_blank" class="button-linkedin">
                    <img src="src/assets/img/linkedin.png" alt="Linkedin"/>
                </a>
                <a href="https://github.com/lucasbx33" target="_blank" class="button-github">
                    <img src="src\assets\img\github.jpg" alt="Github"/>
                </a>
                <a onclick="copierDansPressePapier()" class="button-github" id="texteACopier" data-texte="lucas.reynaud@epsi.fr">
                    <img src="src\assets\img\mail.png" alt="Mail"/>
                </a>
            </div>
        </div>
    </section>
</body>
</html>
