<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'item_product';

    protected $fillable = [
        'title',
        'description',
        'price',
        'stock'
    ];
}
