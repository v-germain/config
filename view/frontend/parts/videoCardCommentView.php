<?php $title = 'Carte Graphique' ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2>Carte Graphique</h2>

<div class="viewContainer">
<?php
while ($part = $partData->fetch()) 
{
?>
    <div class="card" style="width: 32rem;">
    <img src="public/images/cartegraphique/<?= $part['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $part['name'] ?></h4>
        <p class="card-text"><?= $part['descr'] ?> <br /> 
        Marque : <?= $part['brand'] ?><br />
        Chipset : <?= $part['chipset'] ?><br />
        Mémoire : <?= $part['memory'] ?> Go<br />
        Prix : <?= $part['price'] ?> €</p>
        <?php if (isset($_SESSION['pseudo'])): ?>
        <a href="action?index.php=commentView" class="btn btn-success">Laisser un avis</a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['pseudo'])): ?>
        <a href="index.php?action=displayConnexion" class="btn btn-outline-info">Connectez-vous pour laisser un avis!</a>
        <?php endif; ?>
    </div>
    </div>
<?php   
}
?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../../template.php'); ?>