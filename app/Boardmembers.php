<?php

namespace App;

use App\Quotes;

use Illuminate\Database\Eloquent\Model;

class Boardmembers extends Model{
    protected $table = 'board_members';
    protected $primaryKey = 'board_id'; // id set primaryKey
    public $timestamps = false;

    public function quotes(){
        return $this->hasMany(Quotes::class,'members_id');
    }
}





