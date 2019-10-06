<?php $title = $partData['name'] ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<div class="viewPart">

    <h2><?= $partData['name'] ?></h2>

    <a href="index.php?action=disque dur">Retour</a>

    <div class="card" style="width: 40rem;">
        <img src="public/images/disquedur/<?= $partData['id'] ?>.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title"><?= $partData['name'] ?></h4>
            <p class="card-text"><?= $partData['descr'] ?> <br />
                Marque : <?= $partData['brand'] ?><br />
                Taille : <?= $partData['cache'] ?> Go<br />
                Prix : <?= $partData['price'] ?> €</p>
        </div>
    </div>

    <form method="POST" action="index.php?action=addCommentDisqueDur">
        <input type="text-area" id="contentComment" name="contentComment">
        <input type="hidden" value="<?= $_SESSION['id'] ?>" id="idUser" name="idUser">
        <input type="hidden" value="<?= $partData['id'] ?>" id="idHD" name="idHD">
        <input type="submit" value="Envoyer" class="btn btn-outline-info">
    </form>

    <?php
    $comments = getComments($partData['id'], 6);
    while ($comment = $comments->fetch()) {
        ?>
        <div>
            <p>De <?= $comment['pseudo'] ?></p>
            <p><?= $comment['content'] ?></p>
            <?php if (isset($_SESSION['pseudo']) and ($_SESSION['pseudo']) == 'admin') : ?>
                <a href="index.php?action=delComment&amp;id=<?= $comment['idComment'] ?>" class="btn btn-danger">Supprimer</a>
            <?php endif; ?>
        </div>
    <?php

    }
    ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../../template.php'); ?>