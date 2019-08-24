<?php
$rootPath = dirname(__DIR__);
require $rootPath . '/../vendor/houjit/houphp-framework' . DIRECTORY_SEPARATOR . 'houphp.php';
var_dump($rootPath . '/../vendor/houjit/houphp-framework' . DIRECTORY_SEPARATOR . 'houphp.php');exit;
houphp::run($rootPath);