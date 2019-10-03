<?php $title = "Connexion"; ?>

<?php ob_start(); ?>
<?php session_start(); ?>

<form method="POST" action="index.php?action=connexion">
    <table>
        <tr>
            <td>
                <label for="pseudo">Pseudo : </label>
            </td>
            <td>
                <input type="text" placeholder="Pseudo" id="pseudoCo" name="pseudoCo" required />
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

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>