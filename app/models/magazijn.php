<?php
  class Magazijn{
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
  }