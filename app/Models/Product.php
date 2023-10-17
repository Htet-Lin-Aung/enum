<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ProductStatusEnum;

class Product extends Model
{
    use HasFactory;

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'name', 'body', 'status'
    ];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $casts = [
        'status' => ProductStatusEnum::class
    ];
}
