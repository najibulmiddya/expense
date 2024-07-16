<?php
defined('BASEPATH') or exit('No direct script allowed');
class Category_model extends CI_Model
{

  private $table = "category";


  public function get_all()
  {
    $this->db->select("*");
    $this->db->from($this->table);
    return $this->db->get()->result();
  }

  public function save($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function get($id)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where("id", $id);
    return $this->db->get()->row();
  }

  public function update($id, $data)
  {
    $this->db->where("id", $id);
    $this->db->update($this->table, $data);
    return $this->db->affected_rows();
  }

  public function delete($id)
  {
    $this->db->where("id", $id);
    return $this->db->delete($this->table);
  }
}
