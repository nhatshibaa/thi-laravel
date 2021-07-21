<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    //
    public function index(){
        return view('welcome',['list'=> Apartments::paginate(6)]);
    }
}
