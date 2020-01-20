<?php $title = 'Contact Cyril Chenal'; ?>

<?php ob_start(); ?>

<!-- <section id="contact">
    <div class="section-titre">
        <h2>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            Contact </h2>
        <p></p>
    </div>
    <div>
        <form method="post" action="index.php?action=contact">
            <div class="form-group">
                <label>Votre nom</label>
                <input name="name" type="text" class="form-control" value="<?php if (isset($name)) {
                                                                                echo $name;
                                                                            } ?>">
            </div>
            <div class="form-group">
                <label>Votre prénom</label>
                <input name="firstName" type="text" class="form-control" value="<?php if (isset($firstName)) {
                                                                                    echo $firstName;
                                                                                } ?>">
            </div>
            <div class="form-group">
                <label>Votre adresse de messagerie</label>
                <input name="mail" type="mail" class="form-control" value="<?php if (isset($mail)) {
                                                                                echo $mail;
                                                                            } ?>">
            </div>
            <div class="form-group">
                <label>Votre message</label>
                <textarea name="message" class="form-control" rows="3"><?php if (isset($message)) {
                                                                            echo $message;
                                                                        } ?></textarea>
            </div>
            <div class="send" style="margin-top:50px">
                <input class="btn btn-dark" name="sendMail" type="submit">
                <button class="btn btn-dark"><a style="text-decoration:none;color:white" href="index.php?action=home">Retour à l'accueil</a></button>
            </div>
        </form>
    </div>
</section> -->
<section id="contact">
    <div class="container">
        <div class="section-titre">
            <h2>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                Contact </h2>
        </div>
        <div class="card-body" style="color:white">
            <form method="post" action="index.php?action=contact">
                <div class="form-group">
                    <label>Votre nom</label>
                    <input name="name" type="text" class="form-control" value="<?php if (isset($name)) {
                                                                                    echo $name;
                                                                                } ?>">
                </div>
                <div class="form-group">
                    <label>Votre prénom</label>
                    <input name="firstName" type="text" class="form-control" value="<?php if (isset($firstName)) {
                                                                                        echo $firstName;
                                                                                    } ?>">
                </div>
                <div class="form-group">
                    <label>Votre adresse de messagerie</label>
                    <input name="mail" type="mail" class="form-control" value="<?php if (isset($mail)) {
                                                                                    echo $mail;
                                                                                } ?>">
                </div>
                <div class="form-group">
                    <label>Votre message</label>
                    <textarea name="message" class="form-control" rows="3"><?php if (isset($message)) {
                                                                                echo $message;
                                                                            } ?></textarea>
                </div>
                <div class="send" style="margin-top:50px">
                    <input class="btn btn-dark" name="sendMail" type="submit">
                    <button class="btn btn-dark"><a style="text-decoration:none;color:white" href="index.php?action=home">Retour à l'accueil</a></button>
                </div>
            </form>
        </div>
    </div>

</section>
<?php
if (isset($_SESSION['message'])) {
?>
    <div class="alert alert-<?= $_SESSION['msg_type'] ?>" style="top:5px;text-align:center">

    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
    ?>


    <?php $content = ob_get_clean(); ?>

    <?php require('view/template.php') ?>