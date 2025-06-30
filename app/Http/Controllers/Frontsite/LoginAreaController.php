<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAreaController extends Controller
{
    public function index()
    {
        return view('pages.clientarea');
    }
    
}
