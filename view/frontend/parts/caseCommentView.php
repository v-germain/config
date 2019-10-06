<?php $title = $partData['name'] ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2><?= $partData['name'] ?></h2>

    <a href="index.php?action=boitier">Retour</a>

    <div class="card" style="width: 32rem;">
    <img src="public/images/boitier/<?= $partData['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $partData['name'] ?></h4>
        <p class="card-text"><?= $partData['descr'] ?> <br /> 
        Marque : <?= $partData['brand'] ?><br />
        Taille : <?= $partData['size'] ?><br />
        Prix : <?= $partData['price'] ?> €<br />
        id : <?= $partData['id'] ?></p>
        <?php if (isset($_SESSION['pseudo'])): ?>
        <p>Laisser un avis</p>
        <?php endif; ?>
    </div>
    </div>

    <form method="POST" action="index.php?action=addCommentBoitier">
        <input type="text-area" id="contentComment" name="contentComment">
        <input type="hidden" value="<?= $_SESSION['id'] ?>" id="idUser" name="idUser">
        <input type="hidden" value="<?= $partData['id'] ?>" id="idCase" name="idCase">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    $comments = getComments($partData['id'], 4);
    while ($comment =$comments -> fetch()) {
        ?>
        <div>
            <p>De <?= $comment['pseudo'] ?></p>
            <p><?= $comment['content'] ?></p>
            <?php if (isset($_SESSION['pseudo']) AND ($_SESSION['pseudo']) == 'admin'): ?>
                <a href="action?index.php=deleteComment" class="btn btn-danger">Supprimer</a>
            <?php endif; ?>
        </div>
    <?php
    
    } 
    ?>

<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../../template.php'); ?>