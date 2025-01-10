<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'name',
        'image',
    ];

    public function products()
    {
        $this->hasMany(Product::class);
    }
}
