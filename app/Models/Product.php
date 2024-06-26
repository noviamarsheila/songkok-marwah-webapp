<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['name', 'deskripsi', 'slug', 'category_id', 'image', 'publish_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
