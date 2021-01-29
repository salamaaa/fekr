<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['title','content','category_id','featured','slug'];
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getFeaturedAttribute($featured): string
    {
        return asset($featured);
    }
}
