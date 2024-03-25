<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';


    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id','id');
    }

    public function create($name, $old_price, $new_price, $description, $detail_description, $origin, $standard, $image)
    {
        Product::table($this->table)->insert([
            'name' => $name,
            'old_price' => $old_price,
            'new_price' => $new_price,
            'description' => $description,
            'detail_description' => $detail_description,
            'origin' => $origin,
            'standard' => $standard,
            'image' => $image
        ]);
    }
}