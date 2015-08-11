<?php

/*
 * Request Plugin for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-request
 * @package   hipanel-module-request
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
 */

namespace hipanel\modules\request;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'aliases' => [
            '@request' => '/request/request',
        ],
        'menus' => [
            [
                'class' => 'hipanel\modules\request\SidebarMenu',
            ],
        ],
        'modules' => [
            'request' => [
                'class' => 'hipanel\modules\request\Module',
            ],
        ],
    ];
}
