<?php $title = $partData['name'] ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<div class="viewPart">

    <h2><?= $partData['name'] ?></h2>

    <a href="index.php?action=boitier">Retour</a>

    <div class="card" style="width: 40rem;">
        <img src="public/images/boitier/<?= $partData['id'] ?>.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title"><?= $partData['name'] ?></h4>
            <p class="card-text"><?= $partData['descr'] ?> <br />
                Marque : <?= $partData['brand'] ?><br />
                Taille : <?= $partData['size'] ?><br />
                Prix : <?= $partData['price'] ?> €<br />
                id : <?= $partData['id'] ?></p>
        </div>
    </div>

    <form method="POST" action="index.php?action=addCommentBoitier" class="form comment">
        <input type="text-area" id="contentComment" name="contentComment">
        <input type="hidden" value="<?= $_SESSION['id'] ?>" id="idUser" name="idUser">
        <input type="hidden" value="<?= $partData['id'] ?>" id="idCase" name="idCase">
        <input type="submit" value="Envoyer" class="btn btn-outline-info sendComment">
    </form>

    <?php
    $comments = getComments($partData['id'], 4);
    while ($comment = $comments->fetch()) {
        ?>
        <div class="comments">
            <p>De <?= $comment['pseudo'] ?></p>
            <p><?= htmlspecialchars($comment['content']) ?></p>
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