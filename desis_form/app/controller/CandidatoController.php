<?php

include __DIR__."/../env/Request.php";
include __DIR__."/../model/Candidato.php";

class CandidatoController{


    

	public function all(){

		$candidato = new Candidato();
		$result = $candidato->all();

		return Request::json($result);		
	}

}

?>