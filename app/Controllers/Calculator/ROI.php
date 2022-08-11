<?php

namespace App\Controllers\Calculator;

use App\Controllers\BaseController;

class ROI extends BaseController
{
    public function index()
    {
        return view('admin/criteria/roi/index', ['title'=>'ROI']);
    }
}
