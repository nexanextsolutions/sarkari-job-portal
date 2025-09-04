<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name','email','password','contact','admin',
    ];

    public function user()
    {
        return $this->belongsTo('magichomes\User');
    }
}
 