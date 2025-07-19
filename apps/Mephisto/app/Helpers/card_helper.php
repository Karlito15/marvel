<?php

declare(strict_types = 1);

use KarlitoWeb\Toolbox\Yaml\YamlToArray;

/**
 * @example helper('Example\Blog\Helpers\blog');
 */

if (! function_exists('extract_sense'))
{
    /**
    * @param array $data
    * @return string|null
    */
    function extract_sense(array $data): ?string
    {
        return $data['direction'] ?? null;
    }
}

if (! function_exists('extract_section'))
{
    /**
    * @param array $data
    * @return string|null
    */
    function extract_section(array $data): ?string
    {
        return $data['section'] ?? null;
    }
}

if (! function_exists('extract_icon'))
{
    /**
    * @param array $data
    * @return string|null
    */
    function extract_icon(array $data): ?string
    {
        return $data['icon'] ?? null;
    }
}

if (! function_exists('extract_items'))
{
    /**
    * @param array $data
    * @return array|null
    */
    function extract_items(array $data): ?array
    {
        return $data['items'] ?? null;
    }
}

if (! function_exists('datas_from_yaml'))
{
    /**
     * @param string $filepath
     * @return array
     */
    function datas_from_yaml(string $filepath): array
    {
        return YamlToArray::generate($filepath);
    }
}
