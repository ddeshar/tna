<?php

namespace App;
use App\Boardmembers;

use Illuminate\Database\Eloquent\Model;

class Province extends Model{
    protected $fillable = ['PROVINCE_CODE', 'PROVINCE_NAME', 'PROVINCE_NAME_ENG', 'GEO_ID'];
    protected $table = 'province';
    protected $primaryKey = 'PROVINCE_ID'; // id set primaryKey
    public $timestamps = false;

    public function branches(){
        return $this->hasMany(Boardmembers::class,'board_branch');
    }
}
