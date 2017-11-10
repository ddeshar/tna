<?php

namespace App;

use App\Categories;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{
    protected $fillable = ['title', 'seo_title', 'body', 'image', 'slug', 'meta_description', 'meta_keywords', 'status'];

    protected $table = 'posts';


    public function category() {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany('App\Tags');
    }
}
