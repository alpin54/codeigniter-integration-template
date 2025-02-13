<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model {

  // -- __construct
  public function __construct() {
    parent::__construct();
  }

  // -- get_data
  public function get_data($table, $sorting = 0, $limit = 0, $offset = 0) {
    if ($sorting !== 0) {
      $this->db->order_by($sorting->field, $sorting->order);
    }
    $this->db->order_by('created_date', 'DESC');

    $this->db->where('publish', '1');
    if ($limit !== 0) {
      $q = $this->db->get($table, $limit, $offset);
    } else {
      $q = $this->db->get($table);
    }

    return $q->result_array();
  }


  // -- get_single_data
  public function get_single_data($table, $column, $value, $exist_publish = true) {
    $this->db->where($column, $value);
    if ($exist_publish) {
      $this->db->where('publish', '1');
    }
    $q = $this->db->get($table);
    if($q->num_rows() > 0) {
      return $q->row();
    } else {
      return false;
    }
  }


  // -- get_data_where
  public function get_data_where($table, $column, $value, $sorting = 0, $limit = 0, $offset = 0, $exist_publish = true)
  {
    if ($sorting !== 0) {
      $this->db->order_by($sorting->field, $sorting->order);
    }
    $this->db->where($column, $value);
    if ($exist_publish) {
      $this->db->where('publish', '1');
    }
    if ($limit !== 0) {
      $q = $this->db->get($table, $limit, $offset);
    } else {
      $q = $this->db->get($table);
    }
    return $q->result_array();
  }


  // -- update_data
  function update_data($tabel,$key,$kode,$data)
  {
    $this->db->where($key, $kode);
    $this->db->update($tabel, $data);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }


  // -- get_data_where_not_in
  public function get_data_where_not_in($table, $column, $value, $sorting = 0, $limit = 0, $offset = 0)
  {
    if ($sorting !== 0) {
      $this->db->order_by($sorting->field, $sorting->order);
    }
    $this->db->where_not_in($column, $value);
    $this->db->where('publish', '1');
    if ($limit !== 0) {
      $q = $this->db->get($table, $limit, $offset);
    } else {
      $q = $this->db->get($table);
    }
    return $q->result_array();
  }


  // -- add
  public function add($table, $data) {
    $this->db->insert($table, $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }


  // -- update
  public function update($table, $data, $column, $value) {
    $this->db->where($column, $value);
    $this->db->update($table, $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }


  // -- get_code
  public function get_code($code)
  {
    $query = $this->db->query("
      SELECT max(order_id) AS code FROM tb_order WHERE order_id LIKE '%$code%'
      ");

    return $query;
  }


  // -- get_data_sorting
  public function get_data_sorting($table, $multi_sorting = 0, $limit = 0, $offset = 0)
  {
    if ($multi_sorting !== 0) {
      foreach ($multi_sorting as $field => $val) {
        $this->db->order_by($field, $val);
      }
    }
    $this->db->order_by('created_date', 'DESC');

    $this->db->where('publish', '1');
    if ($limit !== 0) {
      $q = $this->db->get($table, $limit, $offset);
    } else {
      $q = $this->db->get($table);
    }

    return $q->result_array();
  }


  // -- get_data_where_not_in
  public function get_data_where_not_in_sorting($table, $column, $value, $multi_sorting = 0, $limit = 0, $offset = 0)
  {
    if ($multi_sorting !== 0) {
      foreach ($multi_sorting as $field => $val) {
        $this->db->order_by($field, $val);
      }
    }
    $this->db->where_not_in($column, $value);
    $this->db->where('publish', '1');
    if ($limit !== 0) {
      $q = $this->db->get($table, $limit, $offset);
    } else {
      $q = $this->db->get($table);
    }
    return $q->result_array();
  }

}
