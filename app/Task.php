<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
        'description',
        'status',
        'date_planed',
        'date_done',
        'category_id'
    ];
    //propietario de la tarea es un usuario
    public function owner(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }

} 
