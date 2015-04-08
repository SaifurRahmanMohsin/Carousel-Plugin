<?php namespace Mohsin\Carousel\Components;

use Cms\Classes\ComponentBase;
use Mohsin\Carousel\Models\Carousel as CarouselModel;

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
        return [
          'id' => [
            'title'        => 'mohsin.carousel::lang.carousel.name',
            'description'  => 'mohsin.carousel::lang.carousel.choice',
            'type'         => 'dropdown'
            ],
          ];
    }

    public function getidOptions()
    {
      return CarouselModel::select('id', 'name')->orderBy('name')->get()->lists('name', 'id');
    }

    public function onRender()
    {
      $carousel = new CarouselModel;
      $this -> carousel = $this -> page['carousel'] = $carousel->where('id', '=', $this -> property('id')) -> first();
    }

}