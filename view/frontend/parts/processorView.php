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
    <img src="public/images/processeur/<?= $part['id'] ?>.jpg" class="card-img-top" alt="Processeur <?= $part['name'] ?>">
    <div class="card-body">
        <h4 class="card-title"><?= $part['name'] ?></h4>
        <p class="card-text"><?= substr($part['descr'], 0, 500) ?>[...] <br />  
        Marque : <?= $part['brand'] ?><br />
        Socket : <?= $part['socket'] ?><br />
        Nombre de coeurs : <?= $part['corecount'] ?><br />
        <?= $part['coreclock'] ?> Mo <br />
        Prix : <?= $part['price'] ?> €</p>
        <?php if (isset($_SESSION['pseudo'])): ?>
        <a href="index.php?action=processeurView&amp;id=<?= $part['id'] ?>" class="btn btn-success">Voir les avis</a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['pseudo'])): ?>
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