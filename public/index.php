<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();
//$app = App::getInstance();
//$posts = $app->getTable('Article');
//$cat1 = ($posts->getLast()->titre);
//var_dump($cat1);
//die();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if($p === 'home') {
    require ROOT . '/pages/hotels/home.php';
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

