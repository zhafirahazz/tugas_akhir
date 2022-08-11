<?php

namespace App\Controllers\Calculator;

use App\Controllers\BaseController;

class NPV extends BaseController
{
    public function index()
    {
        return view('admin/criteria/npv/index', ['title'=>'NPV']);
    }
}
