<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends User
{
    use HasFactory;
    protected $table = 'passenger';
    protected $primaryKey = 'passenger_id';

    protected  $fillable = [
        'name' ,
        'mobile',
        'email' , 
        'username',
        'password' , 
        'address' ,
        'role'
    ];
}
