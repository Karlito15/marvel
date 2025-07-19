<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Web extends BaseConfig
{
    public static function getColorLogo(): string
    {
        return '007CC0';
    }

    public static function getSiteName(): string
    {
        return getenv('app.title');
    }

    public static function getThemeBody(): string
    {
        return 'theme-green font-montserrat'; // {font-montserrat,font-robot,font-krub,light_version,h-menu}
    }

    //--------------------------------------------------------------------
    public function getCsvDirectory(string $directory = 'csv'): string
    {
        return $this->docsDirectory() . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR;
    }

    public function getJsonDirectory(string $directory = 'json'): string
    {
        return $this->docsDirectory() . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR;
    }

    public function getMdDirectory(string $directory = 'markdown'): string
    {
        return $this->docsDirectory() . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR;
    }

    public function getSqlDirectory(string $directory = 'sql'): string
    {
        return $this->docsDirectory() . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR;
    }

    public function getTxtDirectory(string $directory = 'txt'): string
    {
        return $this->docsDirectory() . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR;
    }

    public function getYamlDirectory(string $directory = 'yaml'): string
    {
        return $this->docsDirectory() . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR;
    }

    //--------------------------------------------------------------------

    private function docsDirectory(): string
    {
        return dirname(ROOTPATH, 2) . DIRECTORY_SEPARATOR . 'documents' . DIRECTORY_SEPARATOR . self::getSiteName();
    }
}
