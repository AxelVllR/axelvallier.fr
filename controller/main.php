<?php

class Project {
    private $_name;
    private $_date;
    private $_text;
    private $_img;
    private $_techno;
    private $_link;
    private $_warning;

    const DISPO = 'disponible';
    const EN_COURS = 'Production en Cours';
    const MOM_INDISP = 'Momentanement Indisponible';

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    // GETTERS
    public function name() {
        return $this->_name;
    }
    public function date() {
        return $this->_date;
    }
    public function text() {
        return $this->_text;
    }
    public function img() {
        return $this->_img;
    }
    public function techno() {
        return $this->_techno;
    }
    public function link() {
        return $this->_link;
    }
    public function warning() {
        return $this->_warning;
    }

    //SETTERS

    public function setName($name) {
        $this->_name = $name; 
    }
    public function setDate($date) {
        $this->_date = $date; 
    }
    public function setText($text) {
        $this->_text = $text; 
    }
    public function setImg($img) {
        $this->_img = $img; 
    }
    public function setTechno($techno) {
        $this->_techno = $techno;
    }
    public function setLink($link) {
        $this->_link = $link;
    }
    public function setWarning($warning) {
        if($warning == 1) {
            $this->_warning = $this::DISPO;
        } elseif($warning == 2) {
            $this->_warning = $this::EN_COURS;
        } elseif($warning == 3) {
            $this->_warning = $this::MOM_INDISP;
        }
    }

    public function displayAll(array $donnees) {
        foreach ($donnees as $projet) {
            ?>
            <div class="singleProject">
                <h1><?= $projet->name(); ?></h1>
                <p class="status <?php if($projet->warning() == $projet::DISPO){echo 'dispo';}elseif($projet->warning() == $projet::EN_COURS){echo 'en_cours';}elseif($projet->warning() == $projet::MOM_INDISP){echo 'mom_indisp';} ?>"><?= strtoupper($projet->warning()); ?></p>
                <img src="<?= $projet->img(); ?>" alt="">
                <p class="text_project"><?= $projet->text(); ?></p>
                <p class="techno_project"><strong>Technologies Utilisées : </strong><?= $projet->techno(); ?></p>
                <a href="<?= $projet->link() ?>" target="_blank">Voir le projet</a>
                <p class="date"><?= $projet->date(); ?></p>
            </div><?php
        }
    }

}

$chalets = new Project([
    'name' => 'Chalets & Caviar',
    'date' => 'Novembre 2019',
    'text' => 'Création d\'un site pour une agence immobilière de Location/Vente de chalets de luxe.',
    'techno' => 'CMS - WORDPRESS, CSS3, HTML5',
    'img' => 'public/img/chalet.png',
    'link' => 'http://www.axelvallier.fr/chalet',
    'warning' => 1
]);

$gbaf = new Project([
    'name' => 'GBAF - Extranet',
    'date' => 'Janvier 2020',
    'text' => 'Mise en place d\'un extranet Bancaire',
    'techno' => 'PHP, MySQL, HTML5, CSS3',
    'img' => 'public/img/logo-gbaf.png',
    'link' => 'http://www.axelvallier.fr/gbaf',
    'warning' => 1
]);


