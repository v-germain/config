<?php $title = "Profil"; ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<div id="userInfo">
    <h2>Profil de <?= $userProfil['pseudo'] ?></h2>
    <p>Pseudo : <?= $userProfil['pseudo'] ?> <br />

<?php
if (($userProfil['id']) == $_SESSION['id']) 
{
?>
Mail : <?= $userProfil['mail'] ?> <br /></p>
    
</div>

<div class="formContainer">
    <form method="POST" class="form" action="index.php?action=editPseudo&amp;id=<?= $_SESSION['id'] ?>" style='display : block'>
        <h3>Editer mon profil</h3>
        <div class="form-group">
            <label for="pseudo">Pseudo : </label>
            <input type="text" value="<?= $userProfil['pseudo'] ?>" id="newPseudo" name="newPseudo" required />
        </div>
            <input type="submit" name="formEditPseudo" class="btn btn-primary" value="Valider">
            <a href="index.php?action=displayPass" class="btn btn-primary" id="passModify">Modifier mon mot de passe</a>
    </form> 
<?php
}
?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>