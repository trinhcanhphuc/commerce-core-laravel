<?php

namespace App\Repositories;

use App\Models\ShoeStyleColor;

class ShoeStyleColorRepository
{
    protected $model;

    public function __construct(ShoeStyleColor $model)
    {
        $this->model = $model;
    }

    /**
     * getByStyles.
     *
     * @param array $stylesId
     *
     * @return array
     */
    public function getByStyles(array $stylesId)
    {
        return $this->model->whereIn('shoe_style_id', $stylesId)->get();
    }
}
