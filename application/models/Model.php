<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Model extends CI_MODEL{
    public function get_pemain(){
        $a = $this->db->query("SELECT * FROM tbl_pemain");
        return $a;
    }
}