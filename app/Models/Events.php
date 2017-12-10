<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Events
 * @package App\Models
 * @version December 10, 2017, 3:32 am CST
 *
 * @property integer type_event
 * @property timestamp start_date
 * @property timestamp end_date
 * @property string title
 * @property string purpose
 * @property string description
 * @property string venue
 * @property string kilometers
 * @property string weather
 * @property string ground
 */
class Events extends Model
{
    use SoftDeletes;

    public $table = 'events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'type_event',
        'start_date',
        'end_date',
        'title',
        'purpose',
        'description',
        'venue',
        'kilometers',
        'weather',
        'ground'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type_event' => 'integer',
        'title' => 'string',
        'purpose' => 'string',
        'description' => 'string',
        'venue' => 'string',
        'kilometers' => 'string',
        'weather' => 'string',
        'ground' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
