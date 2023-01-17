<?php $title = "JF | Voyage en Alaska"; ?>

<?php ob_start(); ?>

<h2>Liste des commentaires</h2>

<?php
$db = new PDO('mysql:host=localhost;dbname=book;charset=utf8','root','');
$showComment= $db->query('SELECT id_comment,id_user,title,comment,date_comment FROM comment ' );



while ($comData =  $showComment->fetch()) {
    
?>



<table>

<tr>

<td><strong>id_comment : </strong><br><?= $comData['id_comment']; ?> </td> <br>
<td><strong>id_user : </strong><br><?= $comData['id_user']; ?> </td> <br>
<td><strong>title : </strong><br><?= $comData['title']; ?> </td> <br>
<td><strong>comment : </strong><br><?= $comData['comment']; ?> </strong> </td> <br>
<td><strong>date_comment : </strong><br><?= $comData['date_comment']; ?></strong> </td> <br> 

</tr>

</table>

<?php
}
?>


<p class="text">⚠️ revenir ? <a href="index.php?action=introduction" class="text-warning">Aller à la page d'accueil</a></p>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    