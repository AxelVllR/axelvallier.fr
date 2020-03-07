<?php 
require 'controller/main.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" href="public/img/fav.png" />
    <script src="https://kit.fontawesome.com/e144745512.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <title>Axel VALLIER - Développeur PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    jQuery(document).ready(function(){
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },4000);
        });
    });
    </script>
</head>
<body>
    <header class="headroom">
        <nav>
            <ul>
                <li><a href="#ab">A Propos</a></li>
                <li><a href="#proj">Projets</a></li>
                <li><a href="#skl">Skills</a></li>
                <li><a href="#cont">Contact</a></li>
                <li><a href="#" class="blog_btn">BLOG</a></li>
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
    <div class="split"></div>
    <div id="ab" class="about">
        <h1>Who am I ?</h1>
        <p>Bonjour, je m'appelle Axel, Fan de nouvelles Technos et de développement. Actuellement, j'étudie le développement d'application par le biais de PHP et du FrameWork Symfony</p>
    </div>
    <div id="proj" class="projects">
        <h1>Mes Projets</h1>
        <div class="list_projects">
            <?php $chalets->displayAll([$chalets, $gbaf]); ?>
        </div>
    </div>
    <div id="skl" class="skills">
        <h1>Skills</h1>
        <div class="skillbar clearfix " data-percent="90%">
            <div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent">90%</div>
        </div>

        <div class="skillbar clearfix " data-percent="85%">
            <div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">85%</div>
        </div>

        <div class="skillbar clearfix " data-percent="68%">
            <div class="skillbar-title" style="background: #2c3e50;"><span>PHP</span></div>
            <div class="skillbar-bar" style="background: #2c3e50;"></div>
            <div class="skill-bar-percent">68%</div>
        </div>

        <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #46465e;"><span>MySQL</span></div>
            <div class="skillbar-bar" style="background: #5a68a5;"></div>
            <div class="skill-bar-percent">75%</div>
        </div>

        <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
            <div class="skillbar-bar" style="background: #525252;"></div>
            <div class="skill-bar-percent">75%</div>
        </div>

        <div class="skillbar clearfix " data-percent="20%">
            <div class="skillbar-title" style="background: #27ae60;"><span>SymFony</span></div>
            <div class="skillbar-bar" style="background: #2ecc71;"></div>
            <div class="skill-bar-percent">20%</div>
        </div>

        <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title" style="background: #fc9403;"><span>JavaScript</span></div>
            <div class="skillbar-bar" style="background: #fca903;"></div>
            <div class="skill-bar-percent">50%</div>
        </div>

        <div class="skillbar clearfix " data-percent="70%">
            <div class="skillbar-title" style="background: #124e8c;"><span>Figma</span></div>
            <div class="skillbar-bar" style="background: #4288d0;"></div>
            <div class="skill-bar-percent">70%</div>
        </div>
    </div>
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