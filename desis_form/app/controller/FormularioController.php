<?php

include __DIR__."/../env/Request.php";
include __DIR__."/../model/Formulario.php";

class FormularioController {
    
	public function create($data){
		

		$formulario = new Formulario($data['nombre'],
									 $data['alias'],
									 $data['rut'],
									 $data['email'],
									 $data['region'],
									 $data['comuna'],
									 $data['candidato'],
									 $data['como_entero']?json_encode($data['como_entero']):''
									);

		if( count( $formulario->where(" rut = '".$data['rut']."'" ) ) > 0 ){
			Request::redirect("/confirm.php?msn=Usted ya tiene un registro");
		}

		$formulario->save();

		
		Request::redirect("/confirm.php?msn=Su voto ha sido registrado con exito!");


	}


}

?>