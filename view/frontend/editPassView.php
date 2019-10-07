<?php $title = "Profil"; ?>

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

<div>
    <form method="Post" action="index.php?action=editPass" class="form">
        <h3>Modifier le mot de passe</h3>
        <div class="form-group">
            Votre ancien mot de passe :
            <input type="password" name="oldPass" id="oldPass" required />
        </div>
        <div class="form-group">
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="password" id="password" required />
        </div>
        <div class="form-group">
            <label for="password2">Confirmer mot de passe</label>
            <input type="password" name="password2" id="password2" required onkeyup="checkpass();" />
        </div>
        <div id="alert"></div>
        <input type="submit" value="Envoyer" id="bouton" class="btn btn-primary" onclick="return checkpass();" />
    </form>
</div>



<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../template.php'); ?>