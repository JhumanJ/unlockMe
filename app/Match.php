<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    protected $table = 'matchs';

    protected $fillable = [
        'user_id_1','user_id_2', 'slot_1', 'slot_2','channel_sid'
    ];


}
