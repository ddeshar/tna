<?php

namespace App;

use App\Boardmembers;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model{
    protected $table = 'quotes';
    protected $primaryKey = 'quotes_id'; // id set primaryKey
    public $timestamps = false;

    public function Boardmembers() {
        return $this->belongsTo(Boardmembers::class, 'members_id', 'board_id');
    }
}
