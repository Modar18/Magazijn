<?php
  class OverzichtFinancialAdmin{
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getArtikelen(){
      $this->db->query('SELECT * FROM `artikelen`');
      $this->db->execute();
      $result = $this->db->resultSet();
      return $result;
    }

    public function updaterecord($id) {
      $this->db->query("SELECT * FROM artikelen WHERE id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
    
    }

    public function updatetable($post){
      $this->db->query("UPDATE artikelen
                        SET name = :naam,
                            categorie = :categorie,
                            omschrijving = :omschrijving,
                            prijs =:prijs
                            WHERE id = :id");

      $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
      $this->db->bind(':naam', $post["naam"], PDO::PARAM_STR);
      $this->db->bind(':categorie', $post["categorie"], PDO::PARAM_STR);
      $this->db->bind(':omschrijving', $post["omschrijving"], PDO::PARAM_STR);
      $this->db->bind(':prijs', $post["prijs"], PDO::PARAM_STR);
      
      return $this->db->execute();

    }


  }