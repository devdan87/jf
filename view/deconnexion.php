<?php $title = "JF | Deconnexion"; ?>

<?php ob_start(); ?>

<?php 



session_destroy();

?> 


<p class="text">Merci de votre visite et à très bientot</p> 
<p class="text">⚠️ continuer la lecture ? <a href="index.php?action=connect" class="text-warning">Aller à la page de connexion</a></p>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>