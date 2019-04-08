<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'placa',
    ];

	public static function evaluarPlaca(int $placa){
		switch ($placa) {
		    case 1;
		    case 2;
		        return "Lunes";
		        break;
		    case 3;
		    case 4;
		        return "Martes";
		        break;
		    case 5;
		    case 6;
		        return "Miércoles";
		        break;
		    case 7;
		    case 8;
		        return "Jueves";
		        break;
		    case 9;
		    case 0;
		        return "Viernes";
		        break;
		}   
    }


}
