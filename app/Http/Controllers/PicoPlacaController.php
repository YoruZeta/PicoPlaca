<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;
use App\Momento;
use DateTime;

class PicoPlacaController extends Controller
{

     public function evaluar(Request $request)
    {
    	//VALIDAR INGRESO
    	$this->validate($request, [
            'matricula' => 'required|numeric|digits:4',
            'fecha' => 'required|regex:/^(\d{4})-(\d{1,2})-(\d{1,2})$/',
            'hora' => 'required',
        ]);

    	//Todo esta bien hasta que se demuestre lo contrario...
    	$respuesta = 'si';

    	//1 fILTRO--> Dia de la matricula igual al dia de la fecha
    	//MATRICULA
    	$matricula = $request->matricula;
    	$placa = substr($matricula, -1);
    	$diaRestringidoPlaca = Carro::evaluarPlaca($placa);

    	//TIEMPO - dia
    	$fecha = $request->fecha;
		$diaFecha = Momento::evaluarDia($fecha);
		if($diaRestringidoPlaca == $diaFecha)$respuesta = 'no';

	    //2 fILTRO--> Que no este en las horas del PICO&PLACA
		//TIMEPO - hora
		$hora = $request->hora;
		$estado	 = Momento::evaluarHora($hora);
		if($estado == 'Fuera de tiempo')$respuesta = 'no';
  
		return view('respuesta')->withTitle($respuesta);
    }

}
