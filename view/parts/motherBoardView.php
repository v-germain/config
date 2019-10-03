<?php $title = 'Carte mère' ?>

<?php ob_start(); ?>

<h2>Carte mère</h2>

<div class="viewContainer">
<?php
while ($part = $partData->fetch()) 
{
?>
    <div class="card" style="width: 32rem;">
    <img src="public/images/cartemere/<?= $part['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $part['name'] ?></h4>
        <p class="card-text"><?= $part['descr'] ?> <br /> 
        Marque : <?= $part['brand'] ?><br />
        <?= $part['format'] ?><br />
        Socket : <?= $part['socket'] ?><br />
        Prix : <?= $part['price'] ?> €</p>
    </div>
    </div>
<?php   
}
?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>