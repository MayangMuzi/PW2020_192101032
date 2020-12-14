<?php
class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa() //method utk mendapatkan data mhs
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultAll();
  }

  public function getMahasiswaById($id) //method utk mendapatkan 1 data mhs 
  {
    $this->db->query("SELECT * FROM " . $this->table . 'WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->resultSingle();
  }
}
