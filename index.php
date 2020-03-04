<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/e144745512.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <title>Axel VALLIER - Développeur PHP</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">A Propos</a></li>
                <li><a href="">Projets</a></li>
                <li><a href="">Skills</a></li>
                <li><a href="#cont">Contact</a></li>
            </ul>
        </nav>
        <div id="progress"></div>
        <div class="title">
            <h1>Axel Vallier - Développeur PHP / Symfony</h1>
            <h2>En recherche d'alternance</h2>
        </div>
        <div class="contact_me">
            <a href="#cont">Me Contacter</a>
        </div>
    </header>
    <div class="contact" id="cont">
        <h1>Me Contacter</h1>
        <form action="controller/mailer.php" method="post">
            <input type="text" name="name" id="" placeholder="Axel Vallier">
            <input type="email" name="mail" id="" placeholder="info@axelvallier.fr">
            <textarea name="content" id="" cols="50" rows="10">
            </textarea>
            <input type="submit" value="ENVOYER" name="submit" id="sub">
        </form>
        <p><?php 
            if(isset($_GET['er']))
            {
                if($_GET['er'] == 1)
                {
                    echo 'Remplissez tous les champs !';
                }
            }
        ?></p>
    </div>
    <footer>
        <p>&copy Axel Vallier, Tous droits reservés.</p>
        <div class="social">
            <a href="https://www.linkedin.com/in/axel-vallier-555954187/" target="_blank"><span class="fab fa-linkedin"></span></a>
            <a href="https://github.com/AxelVllR" target="_blank"><span class="fab fa-github"></span></a>
        </div>
    </footer>
    <script src="public/js/app.js"></script>
</body>
</html>