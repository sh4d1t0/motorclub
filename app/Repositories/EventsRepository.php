<?php

namespace App\Repositories;

use App\Models\Events;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventsRepository
 * @package App\Repositories
 * @version December 10, 2017, 3:32 am CST
 *
 * @method Events findWithoutFail($id, $columns = ['*'])
 * @method Events find($id, $columns = ['*'])
 * @method Events first($columns = ['*'])
*/
class EventsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Events::class;
    }
}
