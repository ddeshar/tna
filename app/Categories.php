<?php

namespace App;

use App\Posts;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model{
    public function post(){
        return $this->hasMany(Posts::class,'category_id');
    }
}
