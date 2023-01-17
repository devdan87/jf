<?php $title = "JF | Voyage en Alaska"; ?>

<?php ob_start(); ?>


<p>Le membre n°<?= $_GET['idMemb']; ?> a bien été supprimé</p>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    