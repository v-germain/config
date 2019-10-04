<?php $title = "Profil"; ?>

<?php ob_start(); ?>
<?php session_start(); ?>



<div>
    <h2>Profil de <?= $userProfil['pseudo'] ?></h2>
    <p>Pseudo : <?= $userProfil['pseudo'] ?> <br />

<?php
if(($userProfil['id']) == $_SESSION['id'])
{
?>
    Mail : <?= $userProfil['mail'] ?> <br /></p>
    <a href="#">Editer mon profil</a>
<?php
}
?>
</div>



<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ .'/../template.php'); ?>