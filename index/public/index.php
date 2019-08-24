<?php
$rootPath = dirname(__DIR__);
require '/Users/amosliu/www/houphp/vendor/houjit/houphp-framework' . DIRECTORY_SEPARATOR . 'houphp.php';
var_dump($rootPath);exit;
houphp::run($rootPath);