<?php $title ="Inscription"; ?>

<?php ob_start(); ?>

<form method="POST" action="index.php?action=inscription">
        <table>
            <tr>
                <td>
                    <label for="pseudo">Pseudo : </label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" required value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mail">Mail : </label>
                </td>
                <td>
                    <input type="email" placeholder="Votre mail" id="mail" name="mail" required value="<?php if(isset($mail)) { echo $mail; } ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mail2">Confirmation du mail : </label>
                </td>
                <td>
                    <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" required value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" placeholder="Votre mot de passe" id="password" name="password" required />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password2">Confirmation du mot de passe : </label>
                </td>
                <td>
                    <input type="password" placeholder="Confirmation du mot de passe" id="password2" name="password2" required />
                </td>
            </tr>
            <tr>
                <td><!--purpose : align input submit--></td>
                <td>
                    <input type="submit" name="forminscription" value="Inscription">
                </td>
            </tr>
        </table>
    </form>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>