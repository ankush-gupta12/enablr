<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_json extends Model
{
    /**
     * @var string
     */
    protected $table = 'Product_json';

    /**
     * @var array
     */
    protected $fillable = [
        'product_id', 'slug', 'details'
    ];



     /**
     * @param $value
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
}