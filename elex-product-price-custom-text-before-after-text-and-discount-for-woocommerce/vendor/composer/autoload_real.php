<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1e8d8d5b52f40b742d89afa4a0ce1fbf
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

        spl_autoload_register(array('ComposerAutoloaderInit1e8d8d5b52f40b742d89afa4a0ce1fbf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1e8d8d5b52f40b742d89afa4a0ce1fbf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1e8d8d5b52f40b742d89afa4a0ce1fbf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
