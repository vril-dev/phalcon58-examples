<?php

$loader = new \Phalcon\Autoload\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->setDirectories([
        $config->application->controllersDir,
        $config->application->modelsDir
    ])
    ->setFiles([
        APP_PATH . '/library/helpers.php',
    ])
    ->register();
