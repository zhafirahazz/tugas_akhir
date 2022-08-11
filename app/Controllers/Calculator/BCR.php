<?php

namespace App\Controllers\Calculator;

use App\Controllers\BaseController;

class BCR extends BaseController
{
    public function index()
    {
        return view('admin/criteria/bcr/index', ['title'=>'BCR']);
    }
}
