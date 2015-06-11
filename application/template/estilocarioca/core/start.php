<?php
require ROOT . DS . 'core' . DS . 'config.php';

define('SITE', $config['site_uri'] . DS);
define('CORE', ROOT . DS . 'core' . DS);
define('PAGINAS', ROOT . DS . 'pages' . DS);
define('PARTIALS', ROOT . DS . 'partials' . DS);

require CORE . 'functions.php';
require CORE . 'seo.php';
require CORE . 'router.php';

$route = new Router();
$route->load();