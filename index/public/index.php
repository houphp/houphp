<?php
$rootPath = dirname(__DIR__);
var_dump($rootPath.'/../vendor/houjit/houphp-framework');exit;
require '/Users/amosliu/www/houphp/vendor/houjit/houphp-framework' . DIRECTORY_SEPARATOR . 'houphp.php';
houphp::run($rootPath);