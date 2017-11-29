<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version November 29, 2017, 7:19 am UTC
 *
 * @property varchar firstname
 * @property varchar email
 */
class User extends Model
{
    //use SoftDeletes;

    public $table = 'users';
    

    //protected $dates = ['deleted_at'];


    public $fillable = [
        'firstname',
        'lastname',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        //'email' => 'required|string|email|max:255|unique:users'
    ];

    
}
