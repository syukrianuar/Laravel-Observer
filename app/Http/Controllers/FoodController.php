<?php

namespace App\Http\Controllers;
  
use App\Models\Food;
use Illuminate\Http\Request;
  
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $food = Food::create([
            'name' => 'WaterMelon',
            'price' => 10
        ]);
  
        dd($food);
    }
}