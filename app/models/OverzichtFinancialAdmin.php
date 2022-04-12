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
      //var_dump($post);exit();
      $this->db->query("UPDATE `artikelen`
                        SET `naam` = :naam,
                            `categorie` = :categorie,
                            `omschrijving` = :omschrijving,
                            `prijs` =:prijs
                            WHERE `id` = :id");

      $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
      $this->db->bind(':naam', $post["naam"]);
      $this->db->bind(':categorie', $post["categorie"]);
      $this->db->bind(':omschrijving', $post["omschrijving"]);
      $this->db->bind(':prijs', $post["prijs"], PDO::PARAM_INT);
      
      return $this->db->execute();

    }


  }