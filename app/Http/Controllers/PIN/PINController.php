<?php

namespace App\Http\Controllers\PIN;

use App\Http\Controllers\Controller;
use App\Traits\PINTrait;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PINController extends Controller
{
    use PINTrait;

    public function index()
    {
        return Inertia::render('welcome');
    }

    public function generate()
    {
       return response()->json($this->GenerateCode());
    }
}
