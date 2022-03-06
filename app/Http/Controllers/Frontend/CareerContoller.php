<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerContoller extends Controller
{
    public function career()
    {
        return view('frontend.layout.career');
    }
}
