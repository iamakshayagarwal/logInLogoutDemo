<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;  

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_cat_name','cat_id'
    ];
}
