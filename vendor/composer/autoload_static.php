<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc74f6d82cdb81bf94951b876b53d2dd8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Ganchus\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Ganchus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Ganchus\\Database\\Seeders\\GanchusDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/GanchusDatabaseSeeder.php',
        'Modules\\Ganchus\\Http\\Controllers\\GanchusController' => __DIR__ . '/../..' . '/Http/Controllers/GanchusController.php',
        'Modules\\Ganchus\\Providers\\GanchusServiceProvider' => __DIR__ . '/../..' . '/Providers/GanchusServiceProvider.php',
        'Modules\\Ganchus\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc74f6d82cdb81bf94951b876b53d2dd8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc74f6d82cdb81bf94951b876b53d2dd8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc74f6d82cdb81bf94951b876b53d2dd8::$classMap;

        }, null, ClassLoader::class);
    }
}