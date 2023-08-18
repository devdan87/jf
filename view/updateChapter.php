
<?php $title = "JF | Miracle d'Alaska"; ?>

<?php ob_start(); ?>

<?= $_GET['idChap']; ?>



<form method="post" action="index.php?action=update&var=<?= $_GET['idChap']; ?>" enctype="multipart/form-data">

	<label>Le titre :</label><br>
    <input type="text" name="lastTitle" id="titleChapter"><br><br>

    <textarea name="textContent" id="comChapter" cols="65" rows="5"></textarea><br><br>
    


    <input type="submit" value="Valider" id="send">
    
</form>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
