<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    protected $fillable = ['name', 'image'];

    public static function fetchImage($name)
    {
        if($banner = self::where('name', $name)->first()){
            return Storage::disk('public')->url($banner->image);
        }

        return null;
    }
}
