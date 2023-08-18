<?php $title = "JF | Miracle d'Alaska"; ?>

<?php ob_start(); ?>

<h2>Ajouter un chapitre</h2>

<form method="post" action="index.php?action=validChapter" enctype="multipart/form-data">

	<label>Le titre :</label><br>
    <input type="text" name="onetitle" id="titleChapter"><br><br>
    
    <label>Le contenu :</label><br>
    <textarea name="textContent" id="contentChapter" cols="65" rows="10"></textarea><br><br>


    <input type="submit" value="Valider" id="send">
    
</form>

<p class="text">⚠️ revenir ? <a href="index.php?action=introduction" class="text-warning">Aller à la page d'accueil</a></p>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
