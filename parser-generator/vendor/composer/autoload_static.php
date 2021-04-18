<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1c40b293e2c40f5c97819b0bba93a19
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Antlr\\Antlr4\\Runtime\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Antlr\\Antlr4\\Runtime\\' => 
        array (
            0 => __DIR__ . '/..' . '/antlr/antlr4-php-runtime/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1c40b293e2c40f5c97819b0bba93a19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1c40b293e2c40f5c97819b0bba93a19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1c40b293e2c40f5c97819b0bba93a19::$classMap;

        }, null, ClassLoader::class);
    }
}
