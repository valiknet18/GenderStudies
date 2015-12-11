<?php namespace Fotius\Site;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

/**
 * site Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'site',
            'description' => 'No description provided yet...',
            'author'      => 'fotius',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'site' => [
                'label' => 'Сторінки',
                'url' => Backend::url('fotius/site/articles'),
                'icon' => 'icon-list',
                'permissions' => [
                ],
                'order' => 5,
                'sideMenu' => [
                    'index'     => [
                        'label' => 'Головна',
                        'icon' => 'icon-link',
                        'url' => Backend::url('fotius/site/links'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'about'     => [
                        'label' => 'Про центр',
                        'icon'  => 'icon-tasks',
                        'url'   => Backend::url('fotius/site/structures'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                    'news'      => [
                        'label' => 'Новини',
                        'icon'  => 'icon-file-text-o',
                        'url'   => Backend::url('fotius/site/news'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                    'projects'  => [
                        'label' => 'Проекты',
                        'icon'  => 'icon-sticky-note',
                        'url'   => Backend::url('fotius/site/projects'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                    'articles'  => [
                        'label' => 'Публікації',
                        'icon'  => 'icon-file-text',
                        'url'   => Backend::url('fotius/site/articles'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                    'galery'    => [
                        'label' => 'Галерея',
                        'icon'  => 'icon-picture-o',
                        'url'   => Backend::url('fotius/site/albums'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                    'partners'  => [
                        'label' => 'Партнери',
                        'icon'  => 'icon-user',
                        'url'   => Backend::url('fotius/site/partners'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                    'contacts'  => [
                        'label' => 'Контакти',
                        'icon'  => '',
                        'url'   => Backend::url('fotius/site/partners'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ]
                    ],
                ]
            ],
        ];
    }

    public function registerSettings() {
        return [
            'contacts' => [
                'label' => 'Контакти',
                'description' => 'Контактні данні',
                'category' => 'Сайт',
                'icon' => 'icon-sticky-note',
                'class' => 'Fotius\Site\Models\Contact',
                'order' => 100
            ],
            'socials' => [
                'label' => 'Соціальні мережі',
                'description' => 'Соціальні мережі',
                'category' => 'Сайт',
                'icon' => 'icon-weixin',
                'class' => 'Fotius\Site\Models\Social',
                'order' => 100
            ],
            'sliders' => [
                'label' => 'Слайдер',
                'description' => 'Слайдер на головній сторінці',
                'category' => 'Сайт',
                'icon' => 'icon-sliders',
                'class' => 'Fotius\Site\Models\Slider',
                'order' => 100
            ],
            'histories' => [
                'label' => 'Історія',
                'description' => 'Історія відділу',
                'category' => 'Сайт',
                'icon' => 'icon-file',
                'class' => 'Fotius\Site\Models\History',
                'order' => 100
            ]
        ];
    }
}
