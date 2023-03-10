

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Goudy+Bookletter+1911&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
     integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
     crossorigin=""/>

     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lustria&family=Mukta:wght@300&display=swap" rel="stylesheet">
     <title><?= $title ?></title>
</head>
<body>

<header>
<img src="img/logo2.png" alt="logo_avec_livre" class="logo2">
<ul>
     <a href="index.php?action=introduction"><li id="li1">Accueil</li></a>
    <a href="index.php?action=chapter"> <li id="li2">Chapitres</li></a>
   <a href="index.php?action=disconnect"> <li id="li3">Deconnexion</li> </a>
  
   <button id="btnAdmin"> ๐ Admin</button>


   


   
</ul>



<div id="adminLink">
     
<a href="index.php?action=member" id="memb"> <li> Liste des membres ๐จโ๐ฉโ๐งโ๐ฆ</li> </a>
<a href="index.php?action=comment" id="com"> <li> Liste des commentaires ๐</li> </a>
<a href="index.php?action=addChapter" id="addChap"> <li>Ajouter un chapitre ๐๏ธ</li> </a>


</div>

</header>

<h1>Miracle d'Alaska</h1>
    
<?= $content ?>


<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
     integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
     crossorigin=""></script>


    


<footer>

 <a href=""><img src="img/logo.png" alt="logo_avec_livre" id="logo"></a>
 <a href=""><img src="img/fb.png" alt="logo_facebook" id="fb"></a>
 <a href=""><img src="img/inst.png" alt="logo_facebook" id="inst"></a>
 <a href=""><img src="img/twt.png" alt="logo_facebook" id="twt"></a>

</footer>

<script src="js/main.js"></script>
</body>
</html>