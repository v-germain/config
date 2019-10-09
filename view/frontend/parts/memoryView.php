<?php $title = 'Mémoire' ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2>Mémoire</h2>

<div class="viewContainer">

    <?php
    while ($part = $partData->fetch()) {
        ?>
        <div class="card" style="width: 32rem;">
            <img src="public/images/memoire/<?= $part['id'] ?>.jpg" class="card-img-top" alt="Mémoire <?= $part['name'] ?>">
            <div class="card-body">
                <h4 class="card-title"><?= $part['name'] ?></h4>
                <p class="card-text"><?= substr($part['descr'], 0, 500) ?>[...] <br />
                    Marque : <?= $part['brand'] ?><br />
                    DDR<?= $part['speed'] ?> <br />
                    Taille : <?= $part['size'] ?> Go<br />
                    Fréquence : <?= $part['frequency'] ?> Mhz <br />
                    Prix : <?= $part['price'] ?> €</p>
                <?php if (isset($_SESSION['pseudo'])) : ?>
                    <a href="index.php?action=memoireView&amp;id=<?= $part['id'] ?>" class="btn btn-success">Voir les avis</a>
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