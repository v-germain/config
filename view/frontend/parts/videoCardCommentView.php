<?php $title = $partData['name'] ?>

<?php session_start(); ?>
<?php ob_start(); ?>

<h2><?= $partData['name'] ?></h2>

    <a href="index.php?action=carte graphique">Retour</a>

    <div class="card" style="width: 32rem;">
    <img src="public/images/cartegraphique/<?= $partData['id'] ?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= $partData['name'] ?></h4>
        <p class="card-text"><?= $partData['descr'] ?> <br /> 
        Marque : <?= $partData['brand'] ?><br />
        Chipset : <?= $partData['chipset'] ?><br />
        Mémoire : <?= $partData['memory'] ?> Go<br />
        Prix : <?= $partData['price'] ?> €</p>
    </div>
    </div>

    <form method="POST" action="index.php?action=addCommentCarteGraphique">
        <input type="text-area" id="contentComment" name="contentComment">
        <input type="hidden" value="<?= $_SESSION['id'] ?>" id="idUser" name="idUser">
        <input type="hidden" value="<?= $partData['id'] ?>" id="idGraph" name="idGraph">
        <input type="submit" value="Envoyer" class="btn btn-outline-info">
    </form>

    <?php
    $comments = getComments($partData['id'], 2);
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