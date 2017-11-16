<?php

namespace App;
use App\Boardmembers;

use Illuminate\Database\Eloquent\Model;

class Boardpost extends Model{
    protected $fillable = ['bpost_name'];

    protected $table = 'board_post';
    protected $primaryKey = 'bpost_id'; // id set primaryKey
    public $timestamps = false;

    public function positions(){
        return $this->hasMany(Boardmembers::class,'board_position');
    }
}
