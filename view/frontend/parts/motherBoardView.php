<?php $title = 'Carte mère' ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2>Carte mère</h2>

<div class="viewContainer">

    <?php
    while ($part = $partData->fetch()) {
        ?>
        <div class="card" style="width: 32rem;">
            <img src="public/images/cartemere/<?= $part['id'] ?>.jpg" class="card-img-top" alt="Carte mère <?= $part['name'] ?>">
            <div class="card-body">
                <h4 class="card-title"><?= $part['name'] ?></h4>
                <p class="card-text"><?= substr($part['descr'], 0, 500) ?>[...] <br />
                    Marque : <?= $part['brand'] ?><br />
                    <?= $part['format'] ?><br />
                    Socket : <?= $part['socket'] ?><br />
                    Prix : <?= $part['price'] ?> €</p>
                <?php if (isset($_SESSION['pseudo'])) : ?>
                    <a href="index.php?action=cartemereView&amp;id=<?= $part['id'] ?>" class="btn btn-success">Voir les avis</a>
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