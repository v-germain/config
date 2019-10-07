<?php $title = "Connexion"; ?>

<?php ob_start(); ?>

<div class="formContainer">

    <form method="POST" action="index.php?action=connexion" class="form">
        <div class="form-group">
            <label for="pseudo">Mail : </label>
            <input type="email" class="form-control" placeholder="Mail" id="mailCo" name="mailCo" required />
        </div>
        <div class="form-group">
            <label for="password">Mot de passe : </label>
            <input type="password" class="form-control" placeholder="Mot de passe" id="passwordCo" name="passwordCo" required />
        </div>
        <input type="submit" class="btn btn-primary" name="formConnexion" value="Connexion">
        <a href="index.php?action=displayInscription">Pas encore inscrit? Par ici!</a>
    </form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>