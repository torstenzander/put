<?php
require_once dirname(__FILE__) . "/../library/SplClassLoader.php";

$classLoader = new SplClassLoader('Put', dirname(__FILE__).'/../library');
$classLoader->register();