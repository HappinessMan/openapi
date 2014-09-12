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
	    echo $this->post('id');
	}
}