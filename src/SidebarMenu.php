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

use Yii;

class SidebarMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'sidebar';

    protected $_where = [
        'after' => ['dashboard', 'header', 'finance', 'tickets', 'domains', 'servers', 'hosting'],
    ];

    protected $_items = [
        'requests' => [
            'label' => 'Requests',
            'url'   => ['/request/request/index'],
            'icon'  => 'fa-group',
        //  'visible' => function () { return Yii::$app->user->can('support'); },
            'items' => [
                'requests' => [
                    'label' => 'Requests list',
                    'url'   => ['/request/request/index'],
                    'icon'  => 'fa-circle-o',
                ],
            ],
        ],
    ];
}
