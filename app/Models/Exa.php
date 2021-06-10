<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exa extends Model
{
    use HasFactory;
    //aqui
    protected $fillable = 
    [
    	'codigo',
        'nombre',
        'ap_p',
        'ap_m',
        'area',
        'sueldo',
        'dias',
        'total_n',
        'total_b',
    ];
}
