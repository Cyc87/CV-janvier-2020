<?php $title = 'CV Cyril Chenal'; ?>

<?php ob_start(); ?>

<?php require("view/menu.php"); ?>
<section id="home">
    <img src="public/images/1.jpg" alt="" style="width: 100%;margin-top: 80px;">
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
                            <img class="logo" src="public/logo/html5.jpg" alt="logo html5">
                            <div class="progress-bar red-bg animateProgressbar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="red-color">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">Javascript</div>
                        <div class="progress">
                            <img class="logo" src="public/logo/Js.jpg" alt="logo javascript">
                            <div class="progress-bar yellow-bg animateProgressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <span class="yellow-color">30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">Bootstrap</div>
                        <div class="progress">
                            <img class="logo" src="public/logo/Bootstrap.jpg" alt="logo bootstrap">
                            <div class="progress-bar green-bg animateProgressbar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="green-color">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique m-0">
                        <div class="competence-titre">MySQL</div>
                        <div class="progress">
                            <img class="logo" src="public/logo/mysql.jpg" alt="logo mysql">
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
                            <img class="logo" src="public/logo/css3.jpg" alt="logo css3">
                            <div class="progress-bar blue-bg animateProgressbar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="blue-color">60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">PHP</div>
                        <div class="progress">
                            <img class="logo" src="public/logo/php.png" alt="logo php">
                            <div class="progress-bar darkblue-bg animateProgressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <span class="darkblue-color">40%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique">
                        <div class="competence-titre">Wordpress</div>
                        <div class="progress">
                            <img class="logo" src="public/logo/wordpress.jpg" alt="logo worpress">
                            <div class="progress-bar red-bg animateProgressbar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                <span class="red-color">50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="competence-unique m-0">
                        <div class="competence-titre">Photoshop</div>
                        <div class="progress">
                            <img class="logo" src="public/logo/photoshop.jpg" alt="logo photoshop">
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


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php') ?>
<?php require('view/footer.php') ?>