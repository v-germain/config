<?php $title = 'Processeur' ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2>Processeur</h2>

<div class="viewContainer">
<?php
while ($part = $partData->fetch()) 
{
?>
    <div class="card" style="width: 32rem;">
    <img src="public/images/processeur/<?= $part['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $part['name'] ?></h4>
        <p class="card-text"><?= $part['descr'] ?> <br /> 
        Marque : <?= $part['brand'] ?><br />
        Socket : <?= $part['socket'] ?><br />
        Nombre de coeurs : <?= $part['corecount'] ?><br />
        <?= $part['coreclock'] ?> Mo <br />
        Prix : <?= $part['price'] ?> €</p>
        <?php if (isset($_SESSION['pseudo'])): ?>
        <a href="index.php?action=addConfig" class="btn btn-success">Ajouter au panier</a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['pseudo'])): ?>
        <a href="index.php?action=displayConnexion" class="btn btn-outline-info">Connectez-vous pour ajouter des produits à votre pannier</a>
        <?php endif; ?>
    </div>
    </div>
<?php   
}
?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../../template.php'); ?>