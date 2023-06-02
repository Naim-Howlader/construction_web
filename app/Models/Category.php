<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "category_id";

    public function getGalleries()
    {
        return $this->hasMany(Gallery::class, 'category_id', 'category_id');
    }
}