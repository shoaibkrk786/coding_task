<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table ='questions';
    protected $fillable = [
        'id', 'type', 'question', 'anser','questionair_id','choice_1','choice_2','choice_3'
    ];
    public function questionair(){
        return $this->belongsTo('App\Questionair');
    }
}
