<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4529e74ed1d637ef1223c4053fcf3150
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ELEX\\PPCT\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ELEX\\PPCT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4529e74ed1d637ef1223c4053fcf3150::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4529e74ed1d637ef1223c4053fcf3150::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4529e74ed1d637ef1223c4053fcf3150::$classMap;

        }, null, ClassLoader::class);
    }
}
