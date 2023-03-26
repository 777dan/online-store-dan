<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInitcf7612893c5d73b525cb9205bbe3c9ba
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInitcf7612893c5d73b525cb9205bbe3c9ba', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInitcf7612893c5d73b525cb9205bbe3c9ba', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInitcf7612893c5d73b525cb9205bbe3c9ba::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInitcf7612893c5d73b525cb9205bbe3c9ba::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequirecf7612893c5d73b525cb9205bbe3c9ba($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequirecf7612893c5d73b525cb9205bbe3c9ba($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
