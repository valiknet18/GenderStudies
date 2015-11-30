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
                'icon' => '',
                'permissions' => [
                ],
                'order' => 5,
                'sideMenu' => [
                    'articles' => [
                        'label' => 'Статті',
                        'icon'  => '',
                        'url'   => Backend::url('fotius/site/articles'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'structures' => [
                        'label' => 'Структура',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/structures'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'partners' => [
                        'label' => 'Партнери',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/partners'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'news' => [
                        'label' => 'Новини',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/news'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'projects' => [
                        'label' => 'Проекти',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/projects'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'albums' => [
                        'label' => 'Альбоми',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/albums'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ]
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
                'icon' => '',
                'class' => 'Fotius\Site\Models\Contact',
                'order' => 100
            ],
            'socials' => [
                'label' => 'Соціальні мережі',
                'description' => 'Соціальні мережі',
                'category' => 'Сайт',
                'icon' => '',
                'class' => 'Fotius\Site\Models\Social',
                'order' => 100
            ],
            'sliders' => [
                'label' => 'Слайдер',
                'description' => 'Слайдер на головній сторінці',
                'category' => 'Сайт',
                'icon' => '',
                'class' => 'Fotius\Site\Models\Slider',
                'order' => 100
            ]
        ];
    }
}
