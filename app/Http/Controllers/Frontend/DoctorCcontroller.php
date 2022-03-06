<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorCcontroller extends Controller
{
    public function doctor()
    {
        return view('frontend.doctors');
    }
}
