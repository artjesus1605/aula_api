<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15b6b2524c4999d0589d0496069c268f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arthur\\Api\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arthur\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15b6b2524c4999d0589d0496069c268f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15b6b2524c4999d0589d0496069c268f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15b6b2524c4999d0589d0496069c268f::$classMap;

        }, null, ClassLoader::class);
    }
}