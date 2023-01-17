<?php $title = "JF | Voyage en Alaska"; ?>

<?php ob_start(); ?>

<h2>Liste des lecteurs</h2>

<?php
  $db = new PDO('mysql:host=localhost;dbname=book;charset=utf8','root','');
  $showCst =  $db->query('SELECT id_user,pseudo,email,date_inscription FROM user ' );
while ($Cstdata =  $showCst->fetch()) {
?>



<table>

<tr>
<td> <strong>id_user : </strong><br><?= $Cstdata['id_user']; ?> </td>
<td><strong>pseudo : </strong><br><?= $Cstdata['pseudo']; ?> </td>
<td><strong>email : </strong><br><?= $Cstdata['email']; ?> </td>
<td><strong>date d'inscription : </strong><br><?= $Cstdata['date_inscription']; ?></td>
<td><button>  <a href="index.php?action=deleteMemb&idMemb=<?= $Cstdata['id_user']; ?>">❎Supprimer ce membre</a></button></td> <br>
</tr>

</table>


<?php
}
?>

<p class="text">⚠️ revenir ? <a href="index.php?action=introduction" class="text-warning">Aller à la page d'accueil</a></p>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
    

