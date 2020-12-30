<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oreder extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function customer(){
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }


}
