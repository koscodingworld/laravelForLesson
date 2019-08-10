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
}