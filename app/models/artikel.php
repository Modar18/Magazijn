<?php

class Artikel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAanvragen_voor_artikelen()
    {
        $stmt = $this->db->query('SELECT * FROM aanvragen ORDER BY naam_aanvrager ASC');
        $result = $this->db->resultSet();
        return $result;
    }

    
   
}
