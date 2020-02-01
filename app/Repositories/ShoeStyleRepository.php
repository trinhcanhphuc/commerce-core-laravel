<?php

namespace App\Repositories;

use App\Models\ShoeStyle;

class ShoeStyleRepository
{
    protected $model;

    public function __construct(ShoeStyle $model)
    {
        $this->model = $model;
    }

    /**
     * getByTypes.
     *
     * @param array $typesId
     *
     * @return array
     */
    public function getByTypes(array $typesId)
    {
        return $this->model->whereIn('shoe_type_id', $typesId)->get();
    }
}
