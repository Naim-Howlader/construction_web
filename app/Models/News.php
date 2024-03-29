<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $primaryKey = "news_id";
    public function category(){
        return $this->belongsTo('App\Models\NewsCategory', 'category_id', 'category_id');
    }
}
