<?php

namespace App\Services;

use App\Models\ParkImage;

class ParkImageServices extends BaseServices{
    public function __construct(ParkImage $model){

      $this->model = $model;
    }
}