<?php $title = "JF | Voyage en Alaska"; ?>

<?php ob_start(); ?>



<h3 id="psdExist">⚠️ Oups !! cet identifiant existe déjà ! <br> Veuillez en choisir un autre !</h3>
<h3 id="mdpError">⚠️ Oups !! votre idientifiant ou mot de passe est incorrect ! <br> Veuillez réessayer !</h3>
<h3 id="enough">⚠️ Oups !! Caractères insuffisants ! <br> Veuillez insérer plus d'un caractère pour l'identifiant et <br>plus de 3 caractères pour le mot de passe !</h3>
<h3 id="errorCo">⚠️ Oups !! Votre identifiant ou mot de passe est incorrect ! Veuillez réessayer !</h3>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>