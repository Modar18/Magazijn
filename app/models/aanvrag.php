<?php

class Aanvrag
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAanvrag()
    {
        $stmt = $this->db->query('SELECT * FROM aanvragen ORDER BY naam_aanvrager ASC');
        $result = $this->db->resultSet();
        return $result;
    }

    
   
}
