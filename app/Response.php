<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'responses';
    protected $fillable = ['response', 'form_id'];
    public function form()
    {
        return $this->belongsTo('App\Form');
    }
}
