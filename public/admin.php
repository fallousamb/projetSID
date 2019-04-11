<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}
//Auth
$app = App::getInstance();
$auth = new \Core\Auth\DBAuth($app->getDb());
if(!$auth->logged()){
    $app->forbidden();
}

ob_start();
if($p === 'home') {
    require ROOT . '/pages/admin/articles/index.php';
} elseif($p === 'articles.edit') {
    require ROOT . '/pages/admin/articles/edit.php';
}  elseif($p === 'articles.add') {
    require ROOT . '/pages/admin/articles/add.php';
}elseif($p === 'articles.delete') {
    require ROOT . '/pages/admin/articles/delete.php';
}elseif($p === 'categories.index') {
    require ROOT . '/pages/admin/categories/index.php';
} elseif($p === 'categories.edit') {
    require ROOT . '/pages/admin/categories/edit.php';
}  elseif($p === 'categories.add') {
    require ROOT . '/pages/admin/categories/add.php';
}elseif($p === 'categories.delete') {
    require ROOT . '/pages/admin/categories/delete.php';
}


$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

