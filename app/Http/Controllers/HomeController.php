<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $foods = Food::all()->take(4);

        return Inertia::render('homepage',compact('foods'));
    }
}
