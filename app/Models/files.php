<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class files
 * @package App\Models
 * @version December 2, 2017, 12:28 am UTC
 *
 * @property string title
 * @property string description
 * @property string filename
 */
class files extends Model
{
    use SoftDeletes;

    public $table = 'files';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'filename',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'filename' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'filename' => 'required',
    ];

    
}
