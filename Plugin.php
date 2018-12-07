<?php namespace Viamage\RelationsBug;

use Backend;
use System\Classes\PluginBase;

/**
 * RelationsBug Plugin Information File
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
            'name'        => 'RelationsBug',
            'description' => 'No description provided yet...',
            'author'      => 'Viamage',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Viamage\RelationsBug\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'viamage.relationsbug.some_permission' => [
                'tab' => 'RelationsBug',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'relationsbug' => [
                'label'       => 'RelationsBug',
                'url'         => Backend::url('viamage/relationsbug/categories'),
                'icon'        => 'icon-leaf',
                'permissions' => ['viamage.relationsbug.*'],
                'order'       => 500,
            ],
        ];
    }
}
