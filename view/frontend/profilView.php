<?php $title = "Profil"; ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<div>
    <h2>Profil de <?= $userProfil['pseudo'] ?></h2>
    <p>Pseudo : <?= $userProfil['pseudo'] ?> <br />

<?php
if(($userProfil['id']) == $_SESSION['id'])
{
?>
    Mail : <?= $userProfil['mail'] ?> <br /></p>
    <a href="#">Editer mon profil</a>
    <form method="POST" action="index.php?action=editPseudo&amp;id=<?= $_SESSION['id'] ?>" style = 'display : block'>
        <label for="pseudo">Pseudo : </label>
        <input type="text" value="<?= $userProfil['pseudo'] ?>" id="newPseudo" name="newPseudo" required/>
        <input type="submit" name="formEditPseudo" value="Valider">
    </form>
    <form method="POST" action="index.php?action=editMail&amp;id=<?= $_SESSION['id'] ?>" style = 'display : block'>
        <label for="mail">Mail : </label>
        <input type="email" value="<?= $userProfil['mail'] ?>" id="newMail" name="newMail" required/>
        <input type="submit" name="formEditMail" value="Valider">
    </form>



<?php
}
?>
</div>



<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ .'/../template.php'); ?>