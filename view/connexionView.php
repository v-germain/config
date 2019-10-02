<?php $title = "Inscription"; ?>

<?php ob_start(); ?>

<form method="POST" action="index.php?action=connexion">
    <table>
        <tr>
            <td>
                <label for="pseudo">Pseudo : </label>
            </td>
            <td>
                <input type="text" placeholder="Pseudo" id="pseudo" name="pseudo" required value="<?php if (isset($pseudo)) {echo $pseudo;} ?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Mot de passe : </label>
            </td>
            <td>
                <input type="password" placeholder="Mot de passe" id="password" name="password" required />
            </td>
        </tr>
    </table>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>