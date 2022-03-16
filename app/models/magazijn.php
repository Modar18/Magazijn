<?php

class Magazijn
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getMagazijn()
    {
        $stmt = $this->db->query('SELECT * FROM artikelen
        ORDER BY naam ASC');
        $result = $this->db->resultSet();
        return $result;
    }

    
   
}
