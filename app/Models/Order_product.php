<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps;
    public function oreder(){
        return $this->belongsTo(Oreder::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
