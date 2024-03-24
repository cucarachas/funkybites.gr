<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $hidden = [
      'created_at', 'updated_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
