<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06f2100e0daf4e614e6a7c892c9db414
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06f2100e0daf4e614e6a7c892c9db414::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06f2100e0daf4e614e6a7c892c9db414::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06f2100e0daf4e614e6a7c892c9db414::$classMap;

        }, null, ClassLoader::class);
    }
}