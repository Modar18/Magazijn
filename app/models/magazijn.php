<?php

class Magazijn
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getmagazijn()
    {
        $stmt = $this->db->query('SELECT * FROM magazijn ORDER BY artikelen ASC');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleMagazijn($id) {
        $this->db->query("SELECT * From magazijn WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateMagazijn($post) {
        $this->db->query("UPDATE magazijn
                          SET artikelen = :artikelen,
                              categorie = :categorie,
                              totaal = :totaal,
                          WHERE id = :id");
        $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
        $this->db->bind(':artikelen', $post["artikelen"], PDO::PARAM_STR, 191);
        $this->db->bind(':categorie', $post["categorie"], PDO::PARAM_STR);
        $this->db->bind(':totaal', $post["totaal"], PDO::PARAM_INT);

        return $this->db->execute();

    }


    
   
}
