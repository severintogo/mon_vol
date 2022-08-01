<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vol extends Model
{
    use HasFactory;
    protected $data = 'post';
    protected $fillable = [ 'code_vol', 'code_vol' ,'nombre_place_class A' , 'prix_affaire','nombre_place_class B' , 'prix_business','Date_depart','Heure_depart' ];
}

