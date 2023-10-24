<?php

include __DIR__."/../env/Model.php";

class Comuna extends Model {

    // Propiedades de la clase
    private $id;
    private $nombre;
    private $provincia_id;

    // Constructor de la clase
    public function __construct($id=0, $nombre="", $provincia_id=0) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->provincia_id = $provincia_id;
    }



  
    public function  getComunaByRegion($region_id){

        if(!$region_id || !is_numeric($region_id)) return [];
        $region_id = (string) $region_id;

        return $this->select("select c.* from regiones r 
                                left join provincias pv on pv.region_id = r.id 
                                left join comunas c on c.provincia_id = pv.id 
                                where r.id = ".$region_id." order by c.comuna desc;");
    }
 

}


?>