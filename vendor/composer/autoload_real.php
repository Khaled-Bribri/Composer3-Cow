<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdf8ae1a218265927a0df044f1f4f7475
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdf8ae1a218265927a0df044f1f4f7475', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdf8ae1a218265927a0df044f1f4f7475', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitdf8ae1a218265927a0df044f1f4f7475::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
