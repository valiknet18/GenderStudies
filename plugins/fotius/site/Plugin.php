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
                    'articles' => [
                        'label' => 'Статті',
                        'icon'  => 'icon-file-text',
                        'url'   => Backend::url('fotius/site/articles'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'structures' => [
                        'label' => 'Структура',
                        'icon' => 'icon-tasks',
                        'url' => Backend::url('fotius/site/structures'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'partners' => [
                        'label' => 'Партнери',
                        'icon' => 'icon-user',
                        'url' => Backend::url('fotius/site/partners'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'news' => [
                        'label' => 'Новини',
                        'icon' => 'icon-file-text-o',
                        'url' => Backend::url('fotius/site/news'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'projects' => [
                        'label' => 'Проекти',
                        'icon' => 'icon-sticky-note',
                        'url' => Backend::url('fotius/site/projects'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'albums' => [
                        'label' => 'Альбоми',
                        'icon' => 'icon-picture-o',
                        'url' => Backend::url('fotius/site/albums'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'announcments' => [
                        'label' => 'Анонси',
                        'icon' => 'icon-file',
                        'url' => Backend::url('fotius/site/announcments'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'museums' => [
                        'label' => 'Віртуальний музей',
                        'icon' => 'icon-university',
                        'url' => Backend::url('fotius/site/museums'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'links' => [
                        'label' => 'Посилання',
                        'icon' => 'icon-link',
                        'url' => Backend::url('fotius/site/links'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'bibliographies' => [
                        'label' => 'Бібліографія',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/bibliographies'),
                        'permissions' => [
                            'intertech.subscriber.access_articles'
                        ],
                    ],
                    'books' => [
                        'label' => 'Книги',
                        'icon' => '',
                        'url' => Backend::url('fotius/site/books'),
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
