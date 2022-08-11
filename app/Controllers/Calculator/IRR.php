<?php

namespace App\Controllers\Calculator;

use App\Controllers\BaseController;

class IRR extends BaseController
{
    public function index()
    {
        return view('admin/criteria/irr/index', ['title'=>'IRR']);
    }
}
