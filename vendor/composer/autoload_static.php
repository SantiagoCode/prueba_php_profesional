<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita054ee80495c85b784c511efd2ed4591
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita054ee80495c85b784c511efd2ed4591::$classMap;

        }, null, ClassLoader::class);
    }
}