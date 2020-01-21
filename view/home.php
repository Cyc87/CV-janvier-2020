<?php $title = 'CV Cyril Chenal'; ?>

<?php ob_start(); ?>

<?php require("view/menu.php"); ?>

<section id="home">
    <img src="public/images/1.jpg" alt="" style="width: 100%;margin-top: 80px;">
    <div id="textHello" style="display:none">
        <h1 id="textH1Hello">Bienvenue, <span class='color'>dans mon monde</span></h1>
    </div>
    <div id="textHello2" style="display:none">
        <h2 id="textH2Hello">Créer c'est <span class='color'>gagner</span></h2>
    </div>
</section>

<section id="competences">
    <div class="section-titre">
        <h2 class="titreH2"><i class="fa fa-code" aria-hidden="true"></i>Compétences</h2>
        <p style="text-align:justify">Autodidacte et depuis toujours passionné par le développement, j'ai pris la décision à l'âge de 45 ans de suivre une formation chez Openclassroom pour devenir développeur Web.</p>
    </div>
    <div class="competences">
        <div id="competencesTechnique">

            <div class="skill_progress">

                <div class="container">
                    <h3 class="titre" style="color:white">Compétences professionnelles</h3>
                    <div class="competence-unique">
                        <div class="competence-titre">Html5</div>

                        <div class="progress">
                            <div class="progress-bar red-bg animateProgressbar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="red-color">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">Javascript</div>
                        <div class="progress">
                            <div class="progress-bar yellow-bg animateProgressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <span class="yellow-color">30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">Bootstrap</div>
                        <div class="progress">
                            <div class="progress-bar green-bg animateProgressbar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="green-color">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique m-0">
                        <div class="competence-titre">MySQL</div>
                        <div class="progress">
                            <div class="progress-bar darkblue-bg animateProgressbar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                <span class="darkblue-color">50%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="competence-unique">
                        <div class="competence-titre">Css3</div>
                        <div class="progress">
                            <div class="progress-bar blue-bg animateProgressbar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="blue-color">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">PHP</div>
                        <div class="progress">
                            <div class="progress-bar darkblue-bg animateProgressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <span class="darkblue-color">40%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">Wordpress</div>
                        <div class="progress">
                            <div class="progress-bar red-bg animateProgressbar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                <span class="red-color">50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique m-0">
                        <div class="competence-titre">Photoshop</div>
                        <div class="progress">
                            <div class="progress-bar yellow-bg animateProgressbar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                <span class="yellow-color">50%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="diplomes">
    <div class="section-titre">
        <h2 class="titreH2" style="color:white"><i class="fa fa-graduation-cap" aria-hidden="true" style="color:white"></i>Diplômes</h2>
    </div>
    <div class="container">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDev" aria-expanded="false" aria-controls="collapseExample">
            Développeur Web Junior Bac+2 - En cours : Openclassroom 2020
        </button>
        <div class="collapse" id="collapseDev">
            <div class="card card-body">
                Réalisation de 5 projets passant par plusieurs languages de programmation.
            </div>
        </div>
    </div>
    <div class="container">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseBts" aria-expanded="false" aria-controls="collapseExample">
            BTS NRC - VAE : Dîplomé en 2014
        </button>
        <div class="collapse" id="collapseBts">
            <div class="card card-body">
                Brevet de Technicien Supérieur en Négociation et Relation Client. Ce dîplome m'a permis de valoriser tous mes acquis professionnels.
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="section-titre">
        <h2 class="titre h2" style="color:white">
            <i class="fa fa-briefcase" style="color:white" aria-hidden="true"></i>
            Portfolio </h2>
        <p>Réalisations de mes premiers projets pour l'obtention de mon dîplome.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet1.png" alt="WebAgency" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">WebAgency</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site vitrine</p>
                            <a href="http://Projet1.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet2.png" alt="Office de tourisme" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Office de tourisme</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site wordpress</p>
                            <a href="http://Projet2.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet3.png" alt="Réservation de vélo" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Réservation de vélo</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Site de réservation de vélo.</p>
                            <a href="http://Projet3.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet4.png" alt="Blog pour un écrivain" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Blog pour un écrivain</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un blog.</p>
                            <a href="http://Projet4.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img src="public/Projet/Projet5.png" alt="Ma première réalisation professionnelle" class="img-fluid">
                        <figcaption class="entry-content">
                            <h2 class="titre" style="color: white">Projet professionnel</h2>
                            <hr>
                            <p class="flex flex-wrap justify-content-center" style="color: white">Réalisation d'un site de relooking de meubles.</p>
                            <a href="http://Projet5.cyc-developpement.fr">
                                <p style="color:white" class="btn btn-dark">Voir plus</p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="experience">
    <div class="section-titre">
        <h2 class="titre h2" style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i>Expérience </h2>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="experience">
                <div class="experience-item-area">
                    <div class="border-left">
                        <div class="experience-item">
                            <h2 class="titreH3" style="color:white">Développeur Web</h2>
                            <ul class="post-mate ul-li">
                                <li class="blue-color">Janvier 2020 - <span class="current blue-bg">Aujourd'hui</span></li>
                            </ul>
                            <p>- Création d'un site web de relooking de meuble<br></p>
                            <a href="http://Projet5.cyc-developpement.fr" target="_blank" class="blue-color">
                                <img class="imgLogo" src="public/images/logo.png" alt=""></a>
                            <ul class="tabs skills-tab ul-li">
                                <li class="fa fa-item tag-icon">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                </li>
                                <li class="fa fa-item"><a class="tag">#html5</a></li>
                                <li class="fa fa-item"><a class="tag">#css3</a></li>
                                <li class="fa fa-item"><a class="tag">#bootstrap</a></li>
                                <li class="fa fa-item"><a class="tag">#javascript</a></li>
                                <li class="fa fa-item"><a class="tag">#php7</a></li>
                                <li class="fa fa-item"><a class="tag">#mySql</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hobbies">
    <div class="section-titre">
        <h2 class="titreH2" style="color:white"><i class="fa fa-briefcase" aria-hidden="true"></i>Loisirs </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content loisir-content">
                    <figure>
                        <img src="public/images/2.jpg" alt="Jeux vidéo" class="img-fluid">
                    </figure>
                    <div class="entry-content flex flex-column align-items-center justify-content-center align-middle">
                        <h2 class="titreH2"><i class="fas fa-gamepad"></i></h2>
                        <hr>
                        <p class="flex flex-wrap justify-content-center" style="color:white">Retro gaming</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content loisir-content">
                    <figure>
                        <img src="public/images/3.png" alt="Impression 3D" class="img-fluid">
                    </figure>
                    <div class="entry-content flex flex-column align-items-center justify-content-center align-middle">
                        <h2 class="titreH2"><i class="fas fa-cube"></i></h2>
                        <hr>
                        <p class="flex flex-wrap justify-content-center" style="color:white">Musique</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 no-padding">
                <div class="portfolio-content loisir-content">
                    <figure>
                        <img src="public/images/4.png" alt="Film" class="img-fluid">
                    </figure>
                    <div class="entry-content flex flex-column align-items-center justify-content-center align-middle">
                        <h2 class="titreH2"><i class="fas fa-film"></i></h2>
                        <hr>
                        <p class="flex flex-wrap justify-content-center" style="color:white">Film</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="public/js/move.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php') ?>
<?php require('view/footer.php') ?>