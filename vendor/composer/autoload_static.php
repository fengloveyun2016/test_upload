<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63735a9031822aea855ce9a8f8442c94
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wechat\\' => 7,
        ),
        'A' => 
        array (
            'Addons\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wechat\\' => 
        array (
            0 => __DIR__ . '/..' . '/houdunwang/wechat/src',
        ),
        'Addons\\' => 
        array (
            0 => __DIR__ . '/../..' . '/addons',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63735a9031822aea855ce9a8f8442c94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63735a9031822aea855ce9a8f8442c94::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}