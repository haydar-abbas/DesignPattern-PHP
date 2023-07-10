<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitedb9cd529ebe07eb4811327f53831f21
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

        spl_autoload_register(array('ComposerAutoloaderInitedb9cd529ebe07eb4811327f53831f21', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitedb9cd529ebe07eb4811327f53831f21', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitedb9cd529ebe07eb4811327f53831f21::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
