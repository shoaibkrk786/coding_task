<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionair extends Model
{
    protected $table ='questionairs';
    protected $fillable = [
       'id', 'name', 'user_id','duration', 'resume','publish'
    ];
    public function question(){
        return $this->hasMany('App\Question');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
