<?php

namespace App\Repositories;

use App\Models\ShoeType;

class ShoeTypeRepository
{
    protected $model;

    public function __construct(ShoeType $model)
    {
        $this->model = $model;
    }

    /**
     * getByName.
     *
     * @param string $name
     *
     * @return array
     */
    public function getByName(string $name)
    {
        return $name ? $this->model->where('name', $name)->get() : $this->model->all();
    }
}
