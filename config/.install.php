<?php
/**
 * Этот файл является частью виджета веб-приложения RosGear.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'rg.wd.fancybox',
    'category'    => 'lightbox',
    'name'        => 'Fancybox lightbox',
    'description' => 'Fancybox lightbox',
    'namespace'   => 'Rg\Widget\Fancybox',
    'path'        => '/rg/rg.wd.fancybox',
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => ['article:onRender'],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM']
    ]
];
