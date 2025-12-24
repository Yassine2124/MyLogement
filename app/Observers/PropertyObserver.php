<?php

namespace App\Observers;

use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyObserver
{
  
    public function deleting(Property $property): void
    {
        $property->deleteAllImage();
    }

}
