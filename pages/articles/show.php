<?php
$app = App::getInstance();
$post = $app->getTable('Article')->find($_GET['id']);
if($post === false){
    $app->notFound();
}
//$categorie = \App\Table\Categorie::find($post->id_categorie);

$app->setTitle($post->titre);
?>


<h1><?= $post->titre; ?></h1>
<p><em><?= $post->categorie ;?></em></p>
<p><?= $post->contenu; ?></p>
