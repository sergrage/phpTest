<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b12564d9d355683c94432521662f805
{
    public static $classMap = array (
        'ComposerAutoloaderInit4b12564d9d355683c94432521662f805' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit4b12564d9d355683c94432521662f805' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'NamesController' => __DIR__ . '/../..' . '/controllers/NamesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Task' => __DIR__ . '/../..' . '/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4b12564d9d355683c94432521662f805::$classMap;

        }, null, ClassLoader::class);
    }
}
