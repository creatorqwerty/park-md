<?php

namespace App\Services;

use App\Models\ParkActivity;

class ParkActivitySErvices extends BaseServices{
    public function __construct(ParkActivity $model){

      $this->model = $model;
    }
}