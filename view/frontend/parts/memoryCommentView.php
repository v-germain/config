<?php $title = $partData['name'] ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<div class="viewPart">

    <h2><?= $partData['name'] ?></h2>

    <a href="index.php?action=memoire">Retour</a>

    <div class="card" style="width: 40rem;">
        <img src="public/images/memoire/<?= $partData['id'] ?>.jpg" class="card-img-top" alt="Mémoire <?= $partData['name'] ?>">
        <div class="card-body">
            <h4 class="card-title"><?= $partData['name'] ?></h4>
            <p class="card-text"><?= $partData['descr'] ?> <br />
                Marque : <?= $partData['brand'] ?><br />
                DDR<?= $partData['speed'] ?> <br />
                Taille : <?= $partData['size'] ?> Go<br />
                Fréquence : <?= $partData['frequency'] ?> Mhz <br />
                Prix : <?= $partData['price'] ?> €</p>

        </div>
    </div>

    <form method="POST" class="form comment" action="index.php?action=addCommentMemoire">
        <input type="text-area" id="contentComment" name="contentComment">
        <input type="hidden" value="<?= $_SESSION['id'] ?>" id="idUser" name="idUser">
        <input type="hidden" value="<?= $partData['id'] ?>" id="idRAM" name="idRAM">
        <input type="submit" value="Envoyer" class="btn btn-outline-info sendComment">
    </form>

    <?php
    $comments = getComments($partData['id'], 7);
    while ($comment = $comments->fetch()) {
        ?>
        <div class="comments">
            <p>De <?= $comment['pseudo'] ?></p>
            <p><?= htmlspecialchars($comment['content']) ?></p>
            <?php if (isset($_SESSION['pseudo']) and ($_SESSION['pseudo']) == 'admin') : ?>
                <a href="index.php?action=delComment&amp;id=<?= $comment['idComment'] ?>&amp;idPart=<?= $partData['id'] ?>&amp;type=7" class="btn btn-danger">Supprimer</a>
            <?php endif; ?>
        </div>
    <?php

    }
    ?>

</div>


<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../../template.php'); ?>