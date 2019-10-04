<?php $title = "Profil"; ?>

<?php ob_start(); ?>

<?php
//if(isset($userInfo['id']) == $_SESSION['id']) 
{
?>

<div>
    <h2>Profil de <?= $userInfo['pseudo'] ?></h2>
    <p>Pseudo : <?= $userInfo['pseudo'] ?> <br />
    Mail : <?= $userInfo['mail'] ?> <br /></p>
    <a href="#">Editer mon profil</a>
    <a href="#">Se déconnecter</a>
</div>

<?php
}
?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>