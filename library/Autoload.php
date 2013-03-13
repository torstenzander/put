<?php
require_once __DIR__ . "/SplClassLoader.php";

$classLoader = new SplClassLoader('Put', __DIR__);
$classLoader->register();

