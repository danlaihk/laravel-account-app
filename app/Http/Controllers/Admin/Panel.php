<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Layouts\Menu;
class Panel extends Controller{
    protected $menu;



    public function index(){


        return view('admin.index');

    }
}
