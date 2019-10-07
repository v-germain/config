<?php $title = "Inscription"; ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<script type="text/javascript">
    function checkpass() {
        var val1 = document.getElementById("password");
        var val2 = document.getElementById("password2");

        if (val1.value != val2.value) {
            document.getElementById("alert").innerHTML = "Tapez deux passes identiques, merci.";
            return false;
        } else {
            document.getElementById("alert").innerHTML = "Mot de passe identiques";
            return true;
        }
    }
</script>

<div class="formContainer">

    <form method="POST" action="index.php?action=inscription" class="form">
        <div class="form-group">
            <label for="pseudo">Pseudo : </label>

            <input type="text" class="form-control" placeholder="Votre pseudo" id="pseudo" name="pseudo" required value="<?php if (isset($pseudo)) {echo $pseudo;} ?>" />
        </div>
        <div class="form-group">
            <label for="mail">Mail : </label>

            <input type="email" class="form-control" placeholder="Votre mail" id="mail" name="mail" required value="<?php if (isset($mail)) {echo $mail;} ?>" />
        </div>
        <div class="form-group">
            <label for="mail2">Confirmation du mail : </label>
            <input type="email" class="form-control" placeholder="Confirmez votre mail" id="mail2" name="mail2" required value="<?php if (isset($mail2)) {echo $mail2;} ?>" />
        </div>
        <div class="form-group">
            <label for="password">Mot de passe : </label>
            <input type="password" class="form-control" placeholder="Votre mot de passe" id="password" name="password" required />
        </div>
        <div class="form-group">
            <label for="password2">Confirmation du mot de passe : </label>
            <input type="password" class="form-control" placeholder="Confirmation du mot de passe" id="password2" name="password2" onkeyup="checkpass();" required />
            <p id='alert'></p>
        </div>

        <input type="submit" class="btn btn-primary" id="inscription" name="formInscription" value="Inscription" onclick="return checkpass();">
    </form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>