<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
class Test extends Controller{
    public function testDB(){
        dd(User::all());
    }
}
