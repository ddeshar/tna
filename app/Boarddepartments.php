<?php

namespace App;
use App\Boardmembers;

use Illuminate\Database\Eloquent\Model;

class Boarddepartments extends Model{
    protected $fillable = ['department_name'];
    protected $table = 'board_departments';
    protected $primaryKey = 'department_id'; // id set primaryKey
    public $timestamps = false;

    public function departments(){
        return $this->hasMany(Boardmembers::class,'board_dep');
    }
    
}
