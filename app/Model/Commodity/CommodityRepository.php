<?php

namespace App\Model\Commodity;

use App\Model\Commodity\Commodity;
use App\Model\Core\EloquentRepository;

class CommodityRepository extends EloquentRepository
{
    public function __construct(Commodity $commodity)
    {
        $this->model = $commodity;
    }

    public function saveCommodity($data){
        $this->model->name = $data['name'];
        $this->model->price = $data['price'];
        $saveState = $this->save($this->model);
        return $saveState;
    }
}