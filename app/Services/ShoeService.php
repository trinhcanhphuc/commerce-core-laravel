<?php

namespace App\Services;

use App\Repositories\ShoeTypeRepository;
use App\Repositories\ShoeStyleRepository;
use App\Repositories\ShoeStyleColorRepository;

use Illuminate\Support\Collection;
use DB;

class ShoeService
{
    protected $shoe_type_repo;
    protected $shoe_style_repo;
    protected $shoe_style_color_repo;

    public function __construct(
        ShoeTypeRepository $shoeTypeRepo,
        ShoeStyleRepository $shoeStyleRepo,
        ShoeStyleColorRepository $shoeStyleColorRepo
    )
    {
        $this->shoe_type_repo = $shoeTypeRepo;
        $this->shoe_style_repo = $shoeStyleRepo;
        $this->shoe_style_color_repo = $shoeStyleColorRepo;
    }

    public function getByName(string $name) {
        return $this->getShoeTypesByName($name);
    }

    public function getShoesByType(Collection $shoeTypes) {
        $shoeStyles = $this->getShoeStylesByTypes($shoeTypes);
        $shoes = $this->getShoeStyleColorsByStyles($shoeStyles);
        $shoes->map(function ($shoe) use($shoeTypes, $shoeStyles) {
            $shoeStyle = $shoeStyles->where('id', $shoe->shoe_style_id)->first();
            $shoeType = $shoeTypes->where('id', $shoeStyle->id)->first();

            $shoe->style_price = $shoeStyle->price;
            $shoe->style_name = $shoeStyle->main_name;
            $shoe->type_name = $shoeType->full_name;
            $shoe->image_url = "/images/products/".str_replace(" ", "_", $shoeStyle->main_name)."_".str_replace(" ", "_", $shoe->color).".jpg";
            $shoe->image_thumb_url = "/images/products/".str_replace(" ", "_", $shoeStyle->main_name)."_".str_replace(" ", "_", $shoe->color)."_thumb.jpg";
            return $shoe;
        });

        return $shoes;
    }

    public function getShoeTypesByName(string $name) {
        return $this->shoe_type_repo->getByName($name);
    }

    public function getShoeStylesByTypes(Collection $shoeTypes) {
        return $this->shoe_style_repo->getByTypes($shoeTypes->pluck('id')->toArray());
    }

    public function getShoeStyleColorsByStyles(Collection $shoeStyles) {
        return $this->shoe_style_color_repo->getByStyles($shoeStyles->pluck('id')->toArray());
    }
}
