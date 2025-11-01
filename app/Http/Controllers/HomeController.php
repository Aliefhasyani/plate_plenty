<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $foods = Food::all();

        return Inertia::render('homepage',compact('foods'));
    }
}
