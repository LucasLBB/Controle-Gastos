<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5afcde05a6b7ad0faa374f4633cead70
{
    public static $files = array (
        'd2c72fc8b2f8a1e1a8d65f7fa576af75' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5afcde05a6b7ad0faa374f4633cead70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5afcde05a6b7ad0faa374f4633cead70::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}