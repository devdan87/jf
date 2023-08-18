<?php $title = "JF | Miracle d'Alaska"; ?>

<?php ob_start(); ?>




<section id="carousel">
        <div class="carousel">

            <div class="slide">
                <img src="" id="image">
            </div>

            <div id="txt">

            </div>

            <div class="boutonControle">
               <button id="next">➡️</button> 
               <button id="back">⬅️</button>
               
            </div> <br> <br> 

            <div class="boutonStopPlay">
               <button id="stop">⏸️</button>
               <button id="play">▶️</button>
            </div>

        </div>
    </section>

<section id="presentation">
    <div>
    <h2>Présentation :</h2>
    <p>Jean Forteroche,célèbre écrivain français nous relate à travers son nouveau roman <em>"Miracle d'Alaska"</em> son aventure en Amérique du nord. <br>
A travers ces différents chapitres vous allez découvrir les différentes étapes allant de la décision de partir jusqu'à son retour en France en passant bien evidemment par tous les évènements psychologiques ressenti par l'auteur. 
</p>
    </div>
    
<div id="map"></div>
</section>

<?php echo $_SESSION['pseudo']; 

?>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


