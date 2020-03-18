<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Name: MainController
 * Desc: Handle dashboard pages get routes and render default view 
 */

class MainController extends Controller
{
    public function __invoke(){
        return view('panel.index');
    }
}
