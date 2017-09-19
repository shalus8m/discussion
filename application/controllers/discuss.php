<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Discuss extends CI_Controller
{

  public function __construct() {
   parent::__construct();
   $this->load->database();
   $this->load->model('discuss_model',"dm");
   $this->load->helper('url');
 }
	function index()
	{
    $response['data']=$this->dm->fetch_comment();
    // print_r($response);
		$this->load->view("header");
    $this->load->view("index",$response);
		$this->load->view("footer");
	}
	function insert_comment()
	{
		$name = $this->input->post('name');
    $comment = $this->input->post('comment');
    $insert_data = array(
      'name'=>$name,
      'comment'=>$comment
    );
    // print_r($insert_data);
    $this->dm->insert_comment($insert_data);
    $this->index();
	}
}
