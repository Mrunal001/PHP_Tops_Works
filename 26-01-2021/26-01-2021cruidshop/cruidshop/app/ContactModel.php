<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class ContactModel extends Model
{
    use Notifiable;

    protected $fillable =[
       
        "name","email","mobile","subject","message"


    ];

    protected $table='contacts';

}
