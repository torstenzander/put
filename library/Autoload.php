<?php
require_once __DIR__ . "/SplClassLoader.php";
require_once __DIR__ . "/../vendor/autoload.php";

$classLoader = new SplClassLoader('Put', __DIR__);
$classLoader->register();

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

$container = new ContainerBuilder();
$loader = new XmlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.xml');