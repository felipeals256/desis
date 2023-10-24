<?php

include __DIR__."/../env/Model.php";

class Region extends Model {
    // Propiedades de la clase
    private $id;
    private $region;
    private $abreviatura;
    private $capital;

    protected $table = 'regiones'; //define el nombre de la tabla


    // Constructor de la clase
    public function __construct($id=0, $region='', $abreviatura='', $capital='') {
        $this->id = $id;
        $this->region = $region;
        $this->abreviatura = $abreviatura;
        $this->capital = $capital;
    }



  

 

}


?>