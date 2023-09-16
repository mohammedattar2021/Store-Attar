<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $primarykey='id';
    protected $keytype='int';
    public $incrementing= true;
    public $timestamps= true;

}
