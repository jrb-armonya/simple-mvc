<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2715de5d507c89321efe8398ed424c78
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Armonya\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Armonya\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2715de5d507c89321efe8398ed424c78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2715de5d507c89321efe8398ed424c78::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
