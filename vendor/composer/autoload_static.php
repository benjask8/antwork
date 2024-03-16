<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83ebcf7c91569fe06795fab781d6c4cb
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'benjamin\\antwork\\' => 17,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'benjamin\\antwork\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83ebcf7c91569fe06795fab781d6c4cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83ebcf7c91569fe06795fab781d6c4cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83ebcf7c91569fe06795fab781d6c4cb::$classMap;

        }, null, ClassLoader::class);
    }
}