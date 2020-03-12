<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc5d4f85d3ee0d5a5424c1c6fb203ea8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc5d4f85d3ee0d5a5424c1c6fb203ea8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc5d4f85d3ee0d5a5424c1c6fb203ea8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
