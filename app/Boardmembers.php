<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boardmembers extends Model{
    protected $table = 'board_members';
    protected $primaryKey = 'board_id'; // id set primaryKey
    public $timestamps = false;

}
