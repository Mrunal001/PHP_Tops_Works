<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use Notifiable;

   protected $fillable=[

       'name','email','mobile','feedback'


   ];


  protected $table='feedbacks';
}
