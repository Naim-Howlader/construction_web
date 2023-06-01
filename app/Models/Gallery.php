<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = "galleries";
    protected $primaryKey = "gallery_id";
    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'category_id');
    }
}
