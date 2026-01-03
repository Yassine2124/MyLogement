<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\ValideEmailRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyShowController extends Controller
{
   public function index()
   {
        return view('frontend.property.index',[
            'properties'=>Property::query()->disponible(true)->recent()->paginate(6)
        ]);
   }
   public function contact(ValideEmailRequest $request,Property $property){
        dd($request->validated());
   }
    public function shows(string $slug, Property $property,$notify=false){
        $extractedSlug=$property->getSlug();
        if($slug !==$extractedSlug) {
            $slug=$extractedSlug;
        }
        return view('frontend.property.show',compact('slug','property','notify'));
    }

}
