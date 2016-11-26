<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{

    protected $table = 'search';

    protected $fillable = [
        'user_id','slot', 'user_gender', 'user_sexual_orientation'
    ];



}
