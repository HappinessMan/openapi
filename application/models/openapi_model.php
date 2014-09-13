<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class openapi_model extends CI_model {
    public function test(){
        $query = $this->db->query('SELECT name, pass FROM op_user')->row_array();
        return $query;
    }
    public function verify($name,$pass){
        $this->db->select('name,pass');
        $query = $this->db->get_where('op_user', array('name' => $name))->row_array();
        if (empty($query)) {
            return false;
        }
        if ($query['pass'] == $pass){
            return true;
        }
        return false;
    }
}
