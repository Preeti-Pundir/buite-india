<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    

    protected $table = 'products';
    public $timestamps = true;

    // protected $casts = [
    //     'price' => 'float'
    // ];

    protected $fillable = [
        'name',
        'disc',
        'price',
        'user_price',
        'created_at'
    ];
}
