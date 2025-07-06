<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
// Actions 
public function welcome() {
return view("welcome");
}

}
