<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Util\Json;

class main extends Controller
{
    public function __construct(){
        $this->middleware('login');
    }
    public function index(Request $request){
        $user = Auth::user();
        $property = Property::
        join('currencies' , 'currencies.id' , '=' , 'properties.currency_id')
        ->where('user_id' , $user->id)
        ->get();

    
        return view('home' , compact('property'));
    }
    public function getproperty(Request $request){
        $user = Auth::user();
        $property = Property::
        join('currencies' , 'currencies.id' , '=' , 'properties.currency_id')
        ->where('user_id' , $user->id)
        ->get();
        $arr = [];
        $labels =  [];
        $amounts = [];
        $colors = [];
        foreach ($property as $p) {
            array_push($labels , $p->name);
            array_push($amounts , $p->amount);
            array_push($colors , $p->color);
        }
        $arr[]=array( 
            'labels' => $labels,
            'amounts' => $amounts,
            'colors' => $colors
        );

        return $arr;
    }

}
