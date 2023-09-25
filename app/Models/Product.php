<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','category_id ','price','sale_price','quantity','image','status','slug'];
    // protected $fillable = ['name','description','category_id ','price','sale_price','quantity','image','status','slug','store_id'];
    public function category(){
        return $this->belongsTo(Categories::class,'categories_id','id');
    }
    public function store(){
        return $this->belongsTo(Stores::class,'store_id','id');
    }
    public function tags(){
        return $this->belongsToMany(
            Tag::class,
            'product_tag',
            'product_id',
            'tag_id',
            'id',
            'id'
        );
    }
    //Accessors : get {AttrName}Attribute
    public function getImageUrlAttribute(){
        if($this->image){
            return asset('uploads',$this->image);
        }else{
            return asset('assets/img/defalt.png');
        }
    }
    public function validateRules(){
        return [
            'name'=>'required|string|max:255|min:3',
            'category_id'=>'required|exists:categories,id',
            'image'=>'image',
            'price'=>'numeric|min:0',
            'sale_price'=>['numeric','min:0',function($attr,$value,$fail){
                $price = request()->input('price');
                if($value>=$price){
                    // $fail(':attribute يجب أن تكون الخصم أقل من السعر العادي');
                    $fail($attr . 'يجب أن تكون الخصم أقل من السعر العادي');
                }
            }],
        ];
    }
}
