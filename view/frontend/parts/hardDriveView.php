<?php $title = 'Disque dur' ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<div class="viewContainer">

    <h2>Disque dur</h2>

    <?php
    while ($part = $partData->fetch()) {
        ?>
        <div class="card" style="width: 32rem;">
            <img src="public/images/disquedur/<?= $part['id'] ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title"><?= $part['name'] ?></h4>
                <p class="card-text"><?= substr($part['descr'], 0, 500) ?>[...] <br />
                    Marque : <?= $part['brand'] ?><br />
                    Taille : <?= $part['cache'] ?> Go<br />
                    Prix : <?= $part['price'] ?> €</p>
                <?php if (isset($_SESSION['pseudo'])) : ?>
                    <a href="index.php?action=disquedurView&amp;id=<?= $part['id'] ?>" class="btn btn-success">Voir les avis</a>
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