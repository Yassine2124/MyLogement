<?php

namespace App\Models;

use App\Observers\PropertyObserver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Property extends Model
{
    protected $fillable = [
        'title',
        'surface',
        'chambre',
        'prix',
        'ville',
        'adresse',
        'user_id',
        'description',
        'sold'
    ];
    protected static function booted()
    {
        static::observe(PropertyObserver::class);
    }
    public function clients():BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('status');
    }
    public function louer(bool $etat){
        $this->sold=$etat;
        $this->update();
    }
    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
    /**
     * @param UploadedFile[] $files
     */
    public function getSlug(){
        return Str::slug($this->title);
    }
    public function attachFiles($files){
        $pictures=[];
        foreach($files as $file){
            if($file->getError()){
                continue;
            }
            $filename=$file->store('properties/'.$this->id,'public');
            $pictures[]=[
                'filename'=>$filename
            ];
        }
       if(count($pictures)>0){
            $this->images()->createMany($pictures);
       }

    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function firstImage(){
        return $this->images()->first()?->getImageUrl();
    }
    public function deleteAllImage(){
        foreach($this->images as $image){
            Storage::disk('public')->delete($image->filename);
            $image->autoDelete();
        }
        
    }
    public function scopeRecent(Builder $builder):Builder
    {
        return $builder->orderBy('created_at','desc');
    }
    public function scopeDisponible(Builder $builder, $available=true){
        return  $builder->where('sold',!$available);
    }
}
