<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit295cff440f909bab4f43ce702b22760a
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit295cff440f909bab4f43ce702b22760a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit295cff440f909bab4f43ce702b22760a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
