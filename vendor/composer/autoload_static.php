<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b9b3e5be4f2fc875b4559762a6c5f6f
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'calderawp\\licensing_helper\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'calderawp\\licensing_helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/calderawp/licensing-helper/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b9b3e5be4f2fc875b4559762a6c5f6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b9b3e5be4f2fc875b4559762a6c5f6f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}