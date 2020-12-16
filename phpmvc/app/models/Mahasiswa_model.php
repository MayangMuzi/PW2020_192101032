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
  public function tambahDataMahasiswa($data)
  {
    $query = "INSERT INTO" . $this->table . "VALUES ('',:nama, :nim, :email, :jurusan)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
