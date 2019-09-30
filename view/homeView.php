<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<h2></h2>
<p></p>

<div id="slider_container">
    <a id="prev">&#10094;</a>
    <a id="stop" class="display">&#9616;&#9616;</a>
    <a id="play" class="none">&#9658;</a>
    <a id="next">&#10095;</a>
    <figure id="diaporama">
        <img id="imgSlider" src="public/images/slide1.jpg" alt="guide d'utilisation" />
    </figure>
</div>

<h3></h3>
<p></p>

<div id="mainContainer">

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontcpu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Processeur</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontmb.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Carte mère</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontram.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Mémoire</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontdrive.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Disque dur</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontvideo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Carte graphique</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontcase.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Boitier</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

    <div class="card" style="width: 20rem;">
        <img src="public/images/frontpower.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Alimentation</h4>
            <p class="card-text"></p>
            <a href="index.php?action=''" class="btn btn-primary">Voir</a>
        </div>
    </div>

</div>

<script src="public/js/slider.js"></script>
<script src="public/js/init.js"></script>






<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>