<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit64012a5976d7431fb61f89d44f96af1f
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

        spl_autoload_register(array('ComposerAutoloaderInit64012a5976d7431fb61f89d44f96af1f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit64012a5976d7431fb61f89d44f96af1f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit64012a5976d7431fb61f89d44f96af1f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
