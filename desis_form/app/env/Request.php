<?php

class Request {
  
    private $data;

    public function __construct($data=null) {
        $this->data=$data;
    }

    public static function json($data){


        $json='{}';
   
        if(gettype($data) == "array"){

            $json = array_values($data);
            $json = json_encode($json);

        }else{

            $json = json_encode($data);
        }

        return $json;
    }

    public static function redirect($path){
        header('Location: '.$path.'');
        exit; 
    }

}

?>