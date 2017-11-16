<?php

namespace App;

use App\Quotes;
use App\Boarddepartments;
use App\Boardpost;
use App\Province;

use Illuminate\Database\Eloquent\Model;

class Boardmembers extends Model{
    protected $table = 'board_members';
    protected $primaryKey = 'board_id'; // id set primaryKey
    public $timestamps = false;

    public function quotes(){
        return $this->hasMany(Quotes::class,'members_id');
    }

    public function department() {
        return $this->belongsTo(Boarddepartments::class, 'board_dep', 'department_id');
    }

    public function position() {
        return $this->belongsTo(Boardpost::class, 'board_position', 'bpost_id');
    }

    public function province() {
        return $this->belongsTo(Province::class, 'board_branch', 'PROVINCE_ID');
    }
}





