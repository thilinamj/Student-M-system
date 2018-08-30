<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table='courses';
    
    protected $fillable = ['classname','section','day','start_time','end_time'];
}
