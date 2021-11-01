<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddBlog extends Model
{

    
    use Notifiable;

    protected $fillable=[

        'catid','title','image','registered_date','description'


    ];

     
    protected $table='addblogs';
    

}
