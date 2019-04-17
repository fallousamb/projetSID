<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();


if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if($p === 'home') {
    require ROOT . '/pages/hotels/home.php';
}elseif ($p === 'internet') {
    require ROOT . '/pages/hotels/internet.php';
}elseif ($p === 'clim') {
    require ROOT . '/pages/hotels/clim.php';
}elseif ($p === 'internet_clim') {
    require ROOT . '/pages/hotels/internet_clim.php';
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

