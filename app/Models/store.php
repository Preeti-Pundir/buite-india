<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    public $timestamps = true;

    protected $casts = [
        'name' => 'string'
    ];

    protected $fillable = [
        'name',
        'address',
        'city',
        'created_at'
    ];
}
