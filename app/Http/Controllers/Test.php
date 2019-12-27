<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class test extends Controller
{

    public function justCheck(){
        $hello='this is my fist test';

        return $hello;
    }
  
}