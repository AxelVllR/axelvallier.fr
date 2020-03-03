<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <title>Axel VALLIER - Développeur PHP</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>A Propos</li>
                <li>Projets</li>
                <li>Skills</li>
                <li>Contact</li>
            </ul>
        </nav>
        <div class="title">
            <h1>Axel Vallier - Développeur PHP / Symfony</h1>
            <h2>En recherche d'alternance</h2>
        </div>
        <div class="contact">
            <a href="">Me Contacter</a>
        </div>
    </header>
    <form action="controller/mailer.php" method="post">
        <input type="text" name="name" id="" placeholder="Axel Vallier">
        <input type="email" name="mail" id="" placeholder="info@axelvallier.fr">
        <textarea name="content" id="" cols="30" rows="10">
        </textarea>
        <input type="submit" value="ENVOYER" name="submit">
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
</body>
</html>