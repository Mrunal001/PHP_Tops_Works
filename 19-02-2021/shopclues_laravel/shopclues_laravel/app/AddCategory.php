<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddCategory extends Model
{
    use Notifiable;

    protected $fillable=[

        'catname','addeddate'


    ];

     
    protected $table='categories';



}
