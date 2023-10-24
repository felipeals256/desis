<?php
include __DIR__."/../env/Model.php";

class Candidato extends Model{
    // Propiedades de la clase
    private $id;
    private $nombre;

    protected $table = 'candidatos'; //define el nombre de la tabla

    // Constructor de la clase
    public function __construct($nombre='', $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
    }



    


}




?>