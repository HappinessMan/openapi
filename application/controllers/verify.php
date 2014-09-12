<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify extends CI_Controller {

	public function index()
	{
		$this->load->view('beauty/welcome');
	}
	public function test(){
	    $admin=$this->openapi_model->test();
	    print_r($admin);
	}
}