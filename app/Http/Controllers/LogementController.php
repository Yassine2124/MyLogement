<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogementController extends Controller
{
    public function index(){
        $properties=Property::with('clients')->where('user_id',Auth::user()->id)->get();
        $nbrBien=Property::query()->where('user_id',Auth::user()->id)->count();
        return view('backend.properties.logement',compact('properties','nbrBien'));
    }
}
