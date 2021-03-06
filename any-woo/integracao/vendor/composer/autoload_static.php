<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite97ee3f53942086c7b25de8fd51b908e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite97ee3f53942086c7b25de8fd51b908e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite97ee3f53942086c7b25de8fd51b908e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
