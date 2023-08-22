<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaa7c1543ec4787ab1cc1e1df32886596
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitaa7c1543ec4787ab1cc1e1df32886596', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaa7c1543ec4787ab1cc1e1df32886596', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaa7c1543ec4787ab1cc1e1df32886596::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
