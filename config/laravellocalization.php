<?php

return [

    'supportedLocales' => [
        'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'Eng', 'regional' => 'en_GB'],
        'ru' => ['name' => 'Russian', 'script' => 'Cyrl', 'native' => 'Рус', 'regional' => 'ru_RU'],
        'am' => ['name' => 'Armenian', 'script' => 'Armn', 'native' => 'Հայ', 'regional' => 'hy_AM'],
    ],


    'useAcceptLanguageHeader' => true,

    'hideDefaultLocaleInURL' => true,
    'localesOrder' => [],
    'localesMapping' => [],
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),
    'urlsIgnored' => ['/skipped'],

];
