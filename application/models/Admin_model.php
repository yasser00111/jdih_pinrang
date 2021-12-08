<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Admin_model extends CI_Model
{
  function login($db,$data)
  {
    return $this->db->get_where($db,$data);
  }
}