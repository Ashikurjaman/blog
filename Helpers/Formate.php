<?php 

    class Formate{
        public function Validation($data){
            $data = trim($data);
            $data = stripcslashes($data);
            return $data;
        }
    }

?>