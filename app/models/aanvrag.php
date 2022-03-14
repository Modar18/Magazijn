<?php

class Aanvrag {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAanvrag(){
      $stmt=$this->db->query('SELECT id , naam_aanvrager,user_id, naam_artikel, uitgeleend, opbrengst, status  FROM aanvragen ');
        $result = $this->db->resultSet();

        return $result;
    }
    
    
}