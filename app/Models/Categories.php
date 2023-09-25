<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Categories extends Model
{
    use HasFactory;
    public function products(){
        return $this->hasMany(Product::class,'categories_id','id');
    }
    public function children(){
        return $this->hasMany(Categories::class,'parent_id','id');
    }
    public function parent(){
        return $this->belongsTo(Categories::class,'parent_id','id')->withDefault([
            'name'=>'No Parent'
        ]);
    }
    // public function getImageUrlAttribute(){
    //     if($this->image){
    //         return Storage::disk('category')->url($this->image);
    //     }else{
    //         return asset('assets/img/defalt.png');
    //     }
    // }
}
