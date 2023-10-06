<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Stores extends User implements MustVerifyEmail
{
    use HasFactory;
    protected $table = 'stores';
    protected $primarykey='id';
    protected $keytype='int';
    public $incrementing= true;
    public $timestamps= true;
    public function products(){
        return $this->hasMany(Product::class,'store_id','id');
    }

}
