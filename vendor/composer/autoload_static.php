<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79655282fd94439233de012c108fb7ba
{
    public static $classMap = array (
        'Wolfcast\\BrowserDetection' => __DIR__ . '/..' . '/wolfcast/browser-detection/lib/BrowserDetection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit79655282fd94439233de012c108fb7ba::$classMap;

        }, null, ClassLoader::class);
    }
}