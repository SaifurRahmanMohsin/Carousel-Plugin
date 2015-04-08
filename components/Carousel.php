<?php namespace Mohsin\Carousel\Components;

use Cms\Classes\ComponentBase;

class Carousel extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'mohsin.carousel::lang.carousel.name',
            'description' => 'mohsin.carousel::lang.carousel.desc'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}