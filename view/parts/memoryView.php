<?php $title = 'Mémoire' ?>

<?php ob_start(); ?>

<h2>Mémoire</h2>

<div class="viewContainer">
<?php
while ($part = $partData->fetch()) 
{
?>
    <div class="card" style="width: 32rem;">
    <img src="public/images/memoire/<?= $part['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $part['name'] ?></h4>
        <p class="card-text"><?= $part['descr'] ?> <br /> 
        Marque : <?= $part['brand'] ?><br />
        DDR<?= $part['speed'] ?> <br />
        Taille : <?= $part['size'] ?> Go<br />
        Fréquence : <?= $part['frequency'] ?> Mhz <br />
        Prix : <?= $part['price'] ?> €</p>
    </div>
    </div>
<?php   
}
?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>