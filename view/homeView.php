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
        <img id="imgSlider" src="/pro5/public/images/slide1.jpg" alt="guide d'utilisation" />
    </figure>
</div>

<h3></h3>
<p></p>

<div class="viewContainer">

    <?php
    while ($parts = $partsData->fetch()) {
        ?>
        <div class="card" style="width: 20rem;">
            <img src="/pro5/public/images/front<?= $parts['name'] ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title"><?= $parts['name'] ?></h4>
                <p class="card-text"></p>
                <a href="index.php?action=<?= $parts['name'] ?>" class="btn btn-primary">Voir</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="/pro5/public/js/slider.js"></script>
<script src="/pro5/public/js/init.js"></script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>