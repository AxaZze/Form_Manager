<?php
namespace App\Loader ;

use stdClass;

class YamlLoader implements LoaderInterface
{
    public static function load(string $path): object
    {
        $array = yaml_parse_file($path);
        $yaml = json_decode(json_encode($array));
        return $yaml;
    }
    public static function getExtension(): string
    {
        return 'yaml';
    }
}
