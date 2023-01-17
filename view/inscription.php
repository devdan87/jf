<?php $title = "JF | Voyage en Alaska"; ?>

<?php ob_start(); ?>
    
    
    

    <p class="text"> Bienvenu sur le site-web dédié au nouveau roman de Jean FORTEROCHE, pour pouvoir lire ainsi que commenter les différents chapitres vous etes
        invités à vous inscrire ou vous connecter directement avec vos identifiants. Merci et bonne lecture.
    </p>
<form method="post" action="index.php?action=validSub" enctype="multipart/form-data">

	<label>Votre pseudo</label><br>
    <input type="text" name="nom" id="nom"><br><br>
    
    <label>Mot de passe</label><br>
    <input type="password" name="mdp" id="mdp"><br><br>


   
    
    
    <label>Adresse mail</label><br>
    <input type="mail" name="mail" id="mail"><br><br>



    

    <input type="submit" value="Valider" id="send">
    
</form>

<p class="text">⚠️ Déjà inscrit ? <a href="index.php?action=connect" class="text-warning">Aller à la page de connexion</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>