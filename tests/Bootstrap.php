<?php

error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

class Bootstrap {

    public static function init()
    {
        static::initAutoloader();    
    }

    protected static function initAutoloader()
    {
        $vendorPath = static::findParentPath('vendor');
        if (file_exists($vendorPath . '/autoload.php')) {
            include $vendorPath . '/autoload.php';
        }
        spl_autoload_register(function($className) {
            $path = str_replace('\\', '/', $className);
            $testNs = 'ModoLibTest/';
            $testNsLen = strlen($testNs);
            if(substr($path, 0, $testNsLen) == $testNs) {
                include_once __DIR__.'/'.$path.'.php';
            }
        });
    }

    public static function chroot()
    {
        $rootPath = dirname(static::findParentPath('test'));
        chdir($rootPath);
    }

    public static function findParentPath($path)
    {
        $dir = __DIR__;
        $previousDir = '.';
        while (!is_dir($dir . '/' . $path)) {
            $dir = dirname($dir);
            if ($previousDir === $dir) {
                return false;
            }
            $previousDir = $dir;
        }
        return $dir . '/' . $path;
    }

}

Bootstrap::init();
Bootstrap::chroot();