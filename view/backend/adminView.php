<?php $title = "Espace Admin"; ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2>Gestion des membres</h2>
<div class ="memberContainer">
<?php
while ($users = $getUsers->fetch()) 
{
?>
<div class="memberView">
<p>Membre : <?= $users['pseudo'] ?> <br />
    Mail : <?= $users['mail'] ?> <br />
<a href="index.php?action=delUser&id=<?= $users['id'] ?>">Supprimer</a>
</div>
<?php
}
?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ .'/../template.php'); ?>