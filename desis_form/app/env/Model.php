<?php

include __DIR__."/Connect.php";

class Model {
  
    

    public function all(){

        $con = new Connect();
        return $con->query("select * from ".$this->table.";");


    }

    public function select($query){
        $con = new Connect();
    	return $con->query($query);

    }


    public function find(){
        
        $con = new Connect();
        $result =  $con->query("select * from ".$this->table." where id = ".$this.id." limit 1;");

        if(!$result)return null;

        return $result[0];

    }

    public function where($condition){
        
        $con = new Connect();
        $result =  $con->query("select * from ".$this->table." where ".$condition.";");

        if(!$result)return [];

        return $result;

    }


    public function save(){

        $con = new Connect();
        $result =  $con->query("DESCRIBE ".$this->table.";");

   

        $into="";
        $values="";



        foreach ($result as $value) {

            if($value['Field']=='id')continue;

            if($into!=""){$values.=", ";$into.=", ";}

            $attr = $value['Field'];

    

            $valor = $this->$attr?$this->$attr:'null';

        

            if (strpos($value['Type'], "varchar") !== false && $valor!='null') {

                $into.="".$value['Field']."";
                $values.="'".$valor."'";

            }else{
                $into.="".$value['Field']."";
                $values.="".$valor."";
            }
        }

        $insert =  "INSERT INTO ".$this->table." (".$into.") VALUES (".$values.");";



        $con = new Connect();
        $con->exec($insert);

    }

}

?>