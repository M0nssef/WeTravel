<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    protected $table = 'airline';
    protected $primaryKey = 'airline_id';

    protected  $fillable = [
        'Country' ,
        'Depart',
        'Retour' , 
        'Image',
        'date_Aller' , 
        'date_Retour' ,
        'description',
        'capacity',
        'price',
        'available',
    ];


    public function getImageAttribute($value){
        return $value??'passenger/download (1).jpg' ;

    }
}
