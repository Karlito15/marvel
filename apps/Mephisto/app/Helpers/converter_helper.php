<?php

declare(strict_types = 1);

// CodeIgniter Convert Helpers

if (! function_exists('FileSizeConvert')) {
    /**
     * @param float|int|string $bytes
     * @return float|int|string
     */
    function FileSizeConvert(float|int|string $bytes): float|int|string
    {
        $result  = 0;
        $bytes   = floatval($bytes);
        $arBytes = [
            0 => [
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ],
            1 => [
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ],
            2 => [
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ],
            3 => [
                "UNIT" => "KB",
                "VALUE" => 1024
            ],
            4 => [
                "UNIT" => "B",
                "VALUE" => 1
            ],
        ];

        foreach($arBytes as $arItem) {
            if($bytes >= $arItem["VALUE"]) {
                $result = $bytes / $arItem["VALUE"];
                $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
                break;
            }
        }

        return $result;
    }
}
