<?php

include __DIR__."/../env/Request.php";
include __DIR__."/../model/Region.php";

class RegionController {
    



	public function all(){

		$region = new Region();
		$result = $region->all();

		return Request::json($result);		
	}


	

}

?>