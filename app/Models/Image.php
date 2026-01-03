<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = ['filename'];
    public function getImageUrl(){
        return Storage::disk('public')->url($this->filename);    }
    public function autoDelete()
    {
        $this->delete();
    }
}
