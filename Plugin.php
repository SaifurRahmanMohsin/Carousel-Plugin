<?php namespace Mohsin\Carousel;

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Carousel Plugin Information File
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
      return [
        'name'        => 'mohsin.carousel::lang.plugin.name',
        'description' => 'mohsin.carousel::lang.plugin.description',
        'author'      => 'Saifur Rahman Mohsin',
        'icon'        => 'icon-picture-o'
      ];
    }

    public function registerComponents()
    {
      return [
        'Mohsin\Carousel\Components\Carousel' => 'carousel'
      ];
    }
    
    public function registerPermissions()
    {
        return [
            'mohsin.carousel.manage' => ['tab' => 'mohsin.carousel::lang.plugin.tab', 'label' => 'mohsin.carousel::mohsin.carousel::lang.plugin.permission_label']
        ];
    }

    public function registerSettings()
    {
      return [
        'carousels' => [
          'label'       => 'mohsin.carousel::lang.settings.name',
          'url'         => Backend::url('mohsin/carousel/carousels'),
          'description' => 'mohsin.carousel::lang.plugin.description',
          'category'    => SettingsManager::CATEGORY_CMS,
          'icon'        => 'icon-arrows-h',
          'permissions' => ['mohsin.carousel.*'],
          'order'       => 200
        ],
      ];
    }

}
