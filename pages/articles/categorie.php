<?php
    $app = App::getInstance();
    $categorieTable = $app->getTable('Categorie');
    $categorie = $categorieTable->find($_GET['id']);
    if($categorie === false){
        $app->notFound();
    }
    $articles = $app->getTable('Article')->lastByCategory($_GET['id']);
    $categories = $categorieTable->all();
?>
<h2><?= $categorie->titre ;?></h2>
<div class="row">
    <div class="col-sm-8">
        <?php foreach($articles as $post): ?>
            <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </div>

    <div class="col-sm-4" style="padding-top: 10%;">

        <ul>
            <?php foreach($categories as $categorie): ?>
                <li><a href="<?= $categorie->url ;?>"><?= $categorie->titre ;?></a></li>
            <?php endforeach ;?>
        </ul>
    </div>
</div>
