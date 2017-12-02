<?php

namespace App\Repositories;

use App\Models\files;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class filesRepository
 * @package App\Repositories
 * @version December 2, 2017, 12:28 am UTC
 *
 * @method files findWithoutFail($id, $columns = ['*'])
 * @method files find($id, $columns = ['*'])
 * @method files first($columns = ['*'])
*/
class filesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'filename'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return files::class;
    }
}
