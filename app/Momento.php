<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Momento extends Model
{
    protected $fillable = [
        'dia', 'hora',
    ];

    public static function evaluarDia(string $fecha){
    	$dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
		$fecEvaluar = strtotime($fecha); //fecha en yyyy-mm-dd
		$DiaFecha = $dias[date('w', $fecEvaluar)];
		return $DiaFecha;
    }

    public static function evaluarHora(string $hora){
    	$estado = 'A tiempo';
    	$horatime = new DateTime($hora);
		$Inicio1 = new DateTime('07:00');
		$Fin1 = new DateTime('09:30');		
		$Inicio2 = new DateTime('16:00');
		$Fin2 = new DateTime('19:30');
		if($horatime>=$Inicio2 && $horatime<=$Fin2)$estado='Fuera de tiempo';
		if($horatime>=$Inicio2 && $horatime<=$Fin2)$estado='Fuera de tiempo';
		return $estado;
	}
}
