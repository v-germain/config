<?php $title = 'Processeur' ?>

<?php ob_start(); ?>

<h2> <?= 'Processeur' ?>

<div class="viewContainer">
<?php
while ($part = $cpuData->fetch()) 
{
?>
    <div class="card" style="width: 20rem;">
    <img src="public/images/processeur/<?= $part['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $part['name'] ?></h4>
        <p class="card-text"><?= $part['descr'] ?> <br /> 
        Marque : <?= $part['brand'] ?><br />
        Socket : <?= $part['socket'] ?><br />
        Nombre de coeurs : <?= $part['corecount'] ?><br />
        <?= $part['coreclock'] ?> Mo <br />
        Prix : <?= $part['price'] ?> €</p>
    </div>
    </div>
<?php   
}
?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>