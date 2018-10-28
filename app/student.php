<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='students';
    protected $fillable = ['rnumber','fullname','caddress','parentname','paddress','bday','mnumber','lnumber','email','rdate'];
}
