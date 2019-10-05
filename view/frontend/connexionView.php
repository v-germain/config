<?php $title = "Connexion"; ?>

<?php ob_start(); ?>

<form method="POST" action="index.php?action=connexion">
    <table>
        <tr>
            <td>
                <label for="pseudo">Mail : </label>
            </td>
            <td>
                <input type="email" placeholder="Mail" id="mailCo" name="mailCo" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Mot de passe : </label>
            </td>
            <td>
                <input type="password" placeholder="Mot de passe" id="passwordCo" name="passwordCo" required />
            </td>
        </tr>
        <tr>
            <td>
                <!--purpose : align input submit-->
            </td>
            <td>
                <input type="submit" name="formConnexion" value="Connexion">
            </td>
        </tr>
    </table>
</form>

<a href="index.php?action=displayInscription">Pas encore inscrit? Par ici!</a>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ .'/../template.php'); ?>