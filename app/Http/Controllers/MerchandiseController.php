<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(){
        $merchandise = Merchandise::get();

        return view('merchandise', compact('merchandise'));
    }
}
