<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use Notifiable;

    protected $fillable=[

      'photo','firstname','lastname','mobile','email','gender','branch','role','password','cid','sid','ctid'
    ];


    protected $table='registers';
}
