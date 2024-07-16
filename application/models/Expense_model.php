<?php
defined('BASEPATH') or exit('No direct script allowed');
class Expense_model extends CI_Model
{

  private $table = "expense";
  private $cat_table = "category";


  public function get_all($uid)
  {
    $this->db->select("e.*,c.name");
    $this->db->from("{$this->table} e");
    $this->db->join("{$this->cat_table} c", "e.category_id = c.id", "left");
    $this->db->where("added_by", $uid);
    return $this->db->get()->result();
  }
  public function all_get($uid, $type)
  {
    $sub = "(SELECT SUM(price) AS price FROM expense WHERE added_by ='" . $uid . "' $type) as price";
    $this->db->select("e.*, c.name, {$sub}");
    $this->db->from("{$this->table} e");
    $this->db->join("{$this->cat_table} c", "e.category_id = c.id", "left");
    $this->db->where("added_by", $uid);
    return $this->db->get()->row();
  }

  public function get_report($uid, $from, $to)
  {
    $this->db->select("e.price, c.name, e.item, e.expense_date");
    $this->db->from('expense e');
    $this->db->join('category c', 'e.category_id = c.id');
    $this->db->where('e.added_by', $uid);
    $this->db->where('e.expense_date >=', $from);
    $this->db->where('e.expense_date <=', $to);
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

  // use for Reports Controller
  public function reports_get_2($uid, $from, $to)
  {
    $this->db->select('SUM(expense.price) as price, category.name');
    $this->db->from('expense');
    $this->db->join('category', 'expense.category_id = category.id');
    $this->db->where('expense.added_by', $uid);
    $this->db->where('expense.expense_date >=', $from);
    $this->db->where('expense.expense_date <=', $to);
    $this->db->group_by('expense.category_id');
    return $this->db->get()->result();
  }

  // use for Reports Controller
  public function reports_get_1($uid, $cat_id)
  {
    $this->db->select('SUM(expense.price) as price, category.name');
    $this->db->from('expense');
    $this->db->join('category', 'expense.category_id = category.id');
    $this->db->where('expense.added_by', $uid);
    $this->db->where('category.id', $cat_id);
    $this->db->group_by('expense.category_id');
    return $this->db->get()->result();
  }

  public function search($uid, $cat_id)
  {

    $this->db->select('*,category.name');
    $this->db->from('expense');
    $this->db->join('category', 'expense.category_id = category.id', 'left');
    $this->db->where('expense.added_by', $uid);
    $this->db->where('category.id', $cat_id);
    return $this->db->get()->result();
  }
}
