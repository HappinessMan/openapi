<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
class Restful extends REST_Controller {

	public function test1(){
	    $admin=$this->openapi_model->test();
	    print_r($admin);
	}
	public function user_get(){
	    echo $this->get('id');
// 	    $admin=$this->openapi_model->test();
// 	    print_r($admin);
	}
	public function user_post(){
	    $name = $this->post('name');
	    $pass = $this->post('pass');
	    $result = $this->openapi_model->verify($name,$pass)?array("status"=>"right"):array("status"=>"error");
	    $this->response($result);
// 	    $this->response($this->post('pass'));
	}
}