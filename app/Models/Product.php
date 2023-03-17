<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name_product',
        'desc_product',
        'banyak_shoot',
        'banyak_file',
        'benefit',
        'foto_keluarga',
        'price',
        'foto',
    ];
}
