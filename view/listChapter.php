<?php $title = "JF | Miracle d'Alaska"; ?>

<?php ob_start(); ?>

<?php echo $_SESSION['pseudo']; ?>

<?php
$db = new PDO('mysql:host=localhost;dbname=book;charset=utf8','root','');
$showTheChapter= $db->query('SELECT id_chapter,title,content FROM chapter ' );

while ($Cstdata =  $showTheChapter->fetch()) {
    
?>



<td><h2 id="newTitle"><?= $Cstdata['title']; ?></h2> </td> <br>
<td><p id="content"><?= $Cstdata['content']; ?> </p> </td>
<button class="deleteChap"><a href="index.php?action=deleteChapter&idChap=<?= $Cstdata['id_chapter']; ?>"> supprimer ce chapitre </a></button> 
<button class="updateChap"><a href="index.php?action=updateChapter&idChap=<?= $Cstdata['id_chapter']; ?>"> modifier ce chapitre </a></button> 
   

<?php


$showCst =  $db->prepare('SELECT id_user,pseudo,email,date_inscription FROM user WHERE pseudo=?' );
$showCst->execute(array($_SESSION['pseudo']));
$data=$showCst->fetch();
$_SESSION['id']=$data['id_user'];

?>


<form method="post" action="index.php?action=validComment&mainTitle=<?= $Cstdata['title']; ?>" enctype="multipart/form-data">

    <label>Laisser un commentaire</label><br>
    <textarea name="textComment" id="contentChapter" cols="65" rows="5"></textarea><br><br>


    <input type="submit" value="Valider" id="send">
    
</form>




<?php
}

?>






<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>







