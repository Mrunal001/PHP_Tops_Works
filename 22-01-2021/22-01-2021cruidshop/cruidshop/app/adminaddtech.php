<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class adminaddtech extends Model
{
    use Notifiable;
    protected $fillable=[
              "technology_title","technology_name","technology_description"
    ];

    protected $table="addtechnologies";
}
