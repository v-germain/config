<?php $title = "Espace Admin"; ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2></h2>
<p></p>

<h3></h3>
<p></p>

<div class="viewContainer">

</div>


<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ .'/../template.php'); ?>