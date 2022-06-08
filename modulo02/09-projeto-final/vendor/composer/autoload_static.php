<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc73d48d7a6e8ed1abac6bdcc0797a3b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc73d48d7a6e8ed1abac6bdcc0797a3b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc73d48d7a6e8ed1abac6bdcc0797a3b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc73d48d7a6e8ed1abac6bdcc0797a3b::$classMap;

        }, null, ClassLoader::class);
    }
}
