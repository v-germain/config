<?php $title = 'Boitier' ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2>Boitier</h2>

<div class="viewContainer">

    <?php
    while ($part = $partData->fetch()) {
        ?>
        <div class="card" style="width: 32rem;">
            <img src="public/images/boitier/<?= $part['id'] ?>.jpg" class="card-img-top" alt="Boitier <?= $part['name'] ?>">
            <div class="card-body">
                <h4 class="card-title"><?= $part['name'] ?></h4>
                <p class="card-text"><?= substr($part['descr'], 0, 500) ?>[...] <br />
                    Marque : <?= $part['brand'] ?><br />
                    Taille : <?= $part['size'] ?><br />
                    Prix : <?= $part['price'] ?> €<br />
                    <?php if (isset($_SESSION['pseudo'])) : ?>
                        <a href="index.php?action=boitierView&amp;id=<?= $part['id'] ?>" class="btn btn-success">Voir les avis</a>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['pseudo'])) : ?>
                        <a href="index.php?action=displayConnexion" class="btn btn-outline-info">Connectez-vous pour voir les avis!</a>
                    <?php endif; ?>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../../template.php'); ?>