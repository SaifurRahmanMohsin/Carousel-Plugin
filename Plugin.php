<?php namespace Mohsin\Carousel;

use Event;
use Backend;
use System\Classes\PluginBase;
use Backend\Models\BrandSetting;
use System\Classes\SettingsManager;
use System\Controllers\Settings as SettingsController;

/**
 * Carousel Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
    * Returns information about this plugin.
    * @return array
    */
    public function pluginDetails()
    {
        return [
          'name' => 'mohsin.carousel::lang.plugin.name',
          'description' => 'mohsin.carousel::lang.plugin.description',
          'author' => 'Saifur Rahman Mohsin',
          'icon' => 'icon-picture-o'
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function ($form) {
          if (!$form->model instanceof BrandSetting)
              return;

          $form->addTabFields([
              'show_carousels_in_nav' => [
                  'label' => 'mohsin.carousel::lang.preferences.show_carousels_in_nav_label',
                  'commentAbove' => 'mohsin.carousel::lang.preferences.show_carousels_in_nav_comment',
                  'type' => 'switch',
                  'tab' => SettingsManager::CATEGORY_CMS,
                ]
            ]);
        });
    }

    public function registerComponents()
    {
        return [
          'Mohsin\Carousel\Components\Carousel' => 'carousel'
        ];
    }

    public function registerNavigation()
    {
        if (BrandSetting::instance()->get('show_carousels_in_nav')) {
            return [
                'carousels' => [
                  'label' => 'mohsin.carousel::lang.settings.name',
                  'url' => Backend::url('mohsin/carousel/carousels'),
                  'description' => 'mohsin.carousel::lang.plugin.description',
                  'category' => SettingsManager::CATEGORY_CMS,
                  'icon' => 'icon-arrows-h',
                  'permissions' => ['mohsin.carousel.*'],
                  'order' => 200
                ],
            ];
        }
    }

    public function registerSettings()
    {
        if (!BrandSetting::instance()->get('show_carousels_in_nav')) {
            return [
                'carousels' => [
                  'label' => 'mohsin.carousel::lang.settings.name',
                  'url' => Backend::url('mohsin/carousel/carousels'),
                  'description' => 'mohsin.carousel::lang.plugin.description',
                  'category' => SettingsManager::CATEGORY_CMS,
                  'icon' => 'icon-arrows-h',
                  'permissions' => ['mohsin.carousel.*'],
                  'order' => 200
                ],
            ];
        }
    }

    public function registerPermissions()
    {
        return [
            'mohsin.carousel.manage_carousels' => [
                'label' => 'mohsin.carousel::lang.permissions.manage_carousels',
                'tab'   => 'mohsin.carousel::lang.plugin.tab'
            ]
        ];
    }
}
