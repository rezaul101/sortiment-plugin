<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit825b0813c5baf640906a2f42e2d76a81
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Softx\\Sortiment\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Softx\\Sortiment\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit825b0813c5baf640906a2f42e2d76a81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit825b0813c5baf640906a2f42e2d76a81::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit825b0813c5baf640906a2f42e2d76a81::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
