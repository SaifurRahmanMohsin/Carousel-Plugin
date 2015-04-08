<?php namespace Mohsin\Carousel\Models;

use Model;

/**
 * Carousel Model
 */
class Carousel extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_carousel_carousels';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Validation Rules
     */
    public $rules = [
      'name' => 'required|between:3,64',
    ];

    /**
     * @var array Attach Many relation
     */
    public $attachMany = [
      'images' => ['System\Models\File', 'order' => 'sort_order'],
    ];

}