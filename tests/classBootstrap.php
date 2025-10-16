<?php

class Bootstrap
{
    public static function init()
    {
        static::initAutoloader();
    }

    public static function findParentPath($path)
    {
        $dir = __DIR__;
        $previousDir = '.';
        while (! \is_dir($dir.'/'.$path)) {
            $dir = \dirname($dir);
            if ($previousDir === $dir) {
                return false;
            }
            $previousDir = $dir;
        }

        return $dir.'/'.$path;
    }

    protected static function initAutoloader()
    {
        $vendorPath = static::findParentPath('vendor');
        if (\file_exists($vendorPath.'/autoload.php')) {
            include $vendorPath.'/autoload.php';
        }
        \spl_autoload_register(
            function ($className) {
                $path = \str_replace('\\', '/', $className);
                if (\file_exists(__DIR__.'/../src/'.$path.'.php')) {
                    include_once __DIR__.'/../src/'.$path.'.php';
                }
            }
        );
    }
}
