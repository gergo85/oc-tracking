<?php namespace Indikator\Tracking;

use System\Classes\PluginBase;
use Backend;
use BackendAuth;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.tracking::lang.plugin.name',
            'description' => 'indikator.tracking::lang.plugin.description',
            'author'      => 'indikator.tracking::lang.plugin.author',
            'icon'        => 'icon-street-view',
            'homepage'    => 'https://github.com/gergo85/oc-tracking'
        ];
    }

    public function registerNavigation()
    {
        return [
            'tracking' => [
                'label'       => 'indikator.tracking::lang.plugin.name',
                'url'         => Backend::url('indikator/tracking/googleevent'),
                'icon'        => 'icon-street-view',
                'iconSvg'     => 'plugins/indikator/tracking/assets/images/tracking-icon.svg',
                'permissions' => ['indikator.tracking.*'],
                'order'       => 500,
                'sideMenu' => [
                    'googleevent' => [
                        'label'       => 'indikator.tracking::lang.menu.googleevent',
                        'url'         => Backend::url('indikator/tracking/googleevent'),
                        'icon'        => 'icon-google',
                        'permissions' => ['indikator.tracking.google_event']
                    ]
                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'indikator.tracking.google_event' => [
                'tab'   => 'indikator.tracking::lang.plugin.name',
                'label' => 'indikator.tracking::lang.permission.google_event',
                'roles' => ['publisher']
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Indikator\Tracking\Components\GoogleEvent' => 'google_event'
        ];
    }
}
