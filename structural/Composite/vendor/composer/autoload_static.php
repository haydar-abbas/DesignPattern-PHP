<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05d9aeaccadc6b4790f6f88e5f7829a9
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit05d9aeaccadc6b4790f6f88e5f7829a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05d9aeaccadc6b4790f6f88e5f7829a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05d9aeaccadc6b4790f6f88e5f7829a9::$classMap;

        }, null, ClassLoader::class);
    }
}