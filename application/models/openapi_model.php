<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class openapi_model extends CI_model {
    public function test(){
        $query = $this->db->query('SELECT name, pass FROM op_user')->row_array();
        return $query;
    }
}
