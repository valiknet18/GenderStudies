<?php namespace Fotius\Site;

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

}
