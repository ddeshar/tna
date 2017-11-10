<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model{
    public $timestamps = false;
    protected $primaryKey = 'banner_id'; // id set primaryKey
}