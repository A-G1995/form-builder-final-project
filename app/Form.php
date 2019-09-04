<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    protected $fillable = ['user_id', 'form'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
