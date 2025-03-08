<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable=['article_id','body','sort','image'];
    use HasFactory;
    public $timestamps=false;
    function article(){
        return $this->belongsTo(Article::class);
    }
}
