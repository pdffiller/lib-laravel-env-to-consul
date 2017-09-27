<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae50285d6e0faa2763c3fe82e91f7b45
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vagrant\\mypackage\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vagrant\\mypackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae50285d6e0faa2763c3fe82e91f7b45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae50285d6e0faa2763c3fe82e91f7b45::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
