<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;


$loader->registerNamespaces(array(
    'SaadTazi' => __DIR__.'/../vendor/bundles',
    'Gregwar' => __DIR__.'/../vendor/bundles',

    // your other namespaces
));
