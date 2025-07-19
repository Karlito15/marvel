<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

/**
 * -------------------------------------------------------------------
 * AUTOLOADER CONFIGURATION
 * -------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 *
 * NOTE: If you use an identical key in $psr4 or $classmap, then
 *       the values in this file will overwrite the framework's values.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 *
 * @immutable
 */
class Autoload extends AutoloadConfig
{
    /**
     * -------------------------------------------------------------------
     * Namespaces
     * -------------------------------------------------------------------
     * This maps the locations of any namespaces in your application to
     * their location on the file system. These are used by the autoloader
     * to locate files the first time they have been instantiated.
     *
     * The 'Config' (APPPATH . 'Config') and 'CodeIgniter' (SYSTEMPATH) are
     * already mapped for you.
     *
     * You may change the name of the 'App' namespace if you wish,
     * but this should be done prior to creating any namespaced classes,
     * else you will need to modify all of those classes for this to work.
     *
     * @var array<string, list<string>|string>
     */
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
    ];

    /**
     * -------------------------------------------------------------------
     * Class Map
     * -------------------------------------------------------------------
     * The class map provides a map of class names and their exact
     * location on the drive. Classes loaded in this manner will have
     * slightly faster performance because they will not have to be
     * searched for within one or more directories as they would if they
     * were being autoloaded through a namespace.
     *
     * Prototype:
     *   $classmap = [
     *       'MyClass'   => '/path/to/class/file.php'
     *   ];
     *
     * @var array<string, string>
     */
    public $classmap = [];

    /**
     * -------------------------------------------------------------------
     * Files
     * -------------------------------------------------------------------
     * The files array provides a list of paths to __non-class__ files
     * that will be autoloaded. This can be useful for bootstrap operations
     * or for loading functions.
     *
     * Prototype:
     *   $files = [
     *       '/path/to/my/file.php',
     *   ];
     *
     * @var list<string>
     */
    public $files = [];

    /**
     * -------------------------------------------------------------------
     * Helpers
     * -------------------------------------------------------------------
     * Prototype:
     *   $helpers = [
     *       'form',
     *   ];
     *
     * @var list<string>
     */
    public $helpers = [];

    /**
     * Multiple WebSites
     */
    public function __construct()
    {
        parent::__construct();
        $psr4 = [
            'Karlito'  => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Colossus' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Colossus' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Deadpool' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Deadpool' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Fatalis'  => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Fatalis' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Galactus' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Galactus' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Hela'     => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Hela' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Kang'     => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Kang' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Loki'     => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Loki' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Mephisto' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Mephisto' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Onslaught'=> realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Onslaught' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Surtur'   => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Surtur' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Thanos'   => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Thanos' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
//            'Ultron'   => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Ultron' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
       ];

        $classmap = [];

        //--------------------------------------------------------------------
        // Do Not Edit Below This Line
        //--------------------------------------------------------------------

        $this->psr4     = array_merge($this->psr4, $psr4);
        $this->classmap = array_merge($this->classmap, $classmap);

        unset($psr4, $classmap);
    }
}
