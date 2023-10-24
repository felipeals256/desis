<?php

include __DIR__."/../env/Request.php";
include __DIR__."/../model/Comuna.php";

class ComunaController{


    

	public function getComunaByRegion($data){
		
		$comuna = new Comuna();

		$result = $comuna->getComunaByRegion($data['region_id']);



		return Request::json($result);
	}

}

?>