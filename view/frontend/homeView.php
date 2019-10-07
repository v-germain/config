<?php $title = "Accueil"; ?>

<?php session_start(); ?>
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

<div id="reviewContainer">
    <h4>Notre site, c'est vous qui en parlez le mieux!</h4>
            <div id="review">
                <div class="reviews">
                    <p id="name1"></p>
                    <p id="web1"></p>
                    <p id="catch1"></p>
                </div>

                <div class="reviews">
                    <p id="name2"></p>
                    <p id="web2"></p>
                    <p id="catch2"></p>
                </div>

                <div class="reviews">
                    <p id="name3"></p>
                    <p id="web3"></p>
                    <p id="catch3"></p>
                </div>
            </div>
</div>

<script src="/pro5/public/js/ajax.js"></script>
<script src="/pro5/public/js/score.js"></script>
<script src="/pro5/public/js/map.js"></script>
<script src="/pro5/public/js/slider.js"></script>
<script src="/pro5/public/js/init.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>