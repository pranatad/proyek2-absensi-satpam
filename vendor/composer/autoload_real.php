<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit21b1eef3c6c4398e5d9ab38a7ee952af
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

        spl_autoload_register(array('ComposerAutoloaderInit21b1eef3c6c4398e5d9ab38a7ee952af', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit21b1eef3c6c4398e5d9ab38a7ee952af', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit21b1eef3c6c4398e5d9ab38a7ee952af::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit21b1eef3c6c4398e5d9ab38a7ee952af::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire21b1eef3c6c4398e5d9ab38a7ee952af($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire21b1eef3c6c4398e5d9ab38a7ee952af($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}