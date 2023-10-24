<?php
include __DIR__."/../env/Model.php";

class Formulario extends Model{
    public $id;
    public $nombre;
    public $alias;
    public $rut;
    public $email;
    public $region_id;
    public $comuna_id;
    public $candidato_id;
    public $como_entero;

    protected $table = 'formularios'; //define el nombre de la tabla

    // Constructor
    public function __construct($nombre='', $alias='', $rut='', $email='', $region_id='', $comuna_id='', $candidato_id='', $como_entero='') {
        $this->nombre = $nombre;
        $this->alias = $alias;
        $this->rut = $rut;
        $this->email = $email;
        $this->region_id = $region_id;
        $this->comuna_id = $comuna_id;
        $this->candidato_id = $candidato_id;
        $this->como_entero = $como_entero;
    }





}




?>