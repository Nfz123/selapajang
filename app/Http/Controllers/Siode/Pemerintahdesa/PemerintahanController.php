<?php

namespace App\Http\Controllers\Siode\Pemerintahdesa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PemerintahanController extends Controller
{
    public function index()
    {   
        return view('siode.infodesa.pemerintahdesa.index');
    }
}
