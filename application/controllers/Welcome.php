<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> model('settings_model');
		$this -> load -> model('model1');
		$this->load->library(array('form_validation','session'));
		$this -> load -> model('form_model');
		
		
}
	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('themes/header');
		$this->load->view('home_view');
		$this->load->view('themes/footer');
	}
	public function menu()
	{
		
		
		
		$food_details=$this->settings_model->getallfood_details();
		$data["rms_food_details"]=$food_details;
		
		
		$this->load->view('themes/header');
		$this->load->view('menu_view',$data);
		//$this->load->view('themes/footer');
	}
	
		
	
	
	public function lunch()
	{
		$lunch_details=$this->settings_model->getalllunch_details();
		$data["rms_food_details"]=$lunch_details;
		$this->load->view('themes/header');
		$this->load->view('lunch_view',$data);
		//$this->load->view('themes/footer');
	}
	
	public function order()
	{
		if($data=$this->session->userdata('user')){
		
		//$this->session->unset_userdata('user');
		$order_details=$this->settings_model->getallorder_details();
		$data["rms_order_details"]=$order_details;


		

		$this->load->view('themes/header');
		$this->load->view('order_view',$data);
		//$this->load->view('themes/footer');
		}
		else{
			redirect('login');
		}

		}
		public function status($id,$status){
			$order_details=$this->model1->update($id,$status);
		if($order_details)
		{
			echo "updated";
		}
		else
			echo "failed";
		}
	
	
	public function insertorder(){
		$this->form_validation->set_rules('food_id', 'select food', 'trim|required');
		$this->form_validation->set_rules('customer_name', 'write name', 'trim|required');
		
		

		
		if($this->form_validation->run()){
			//echo 'done';
			$customer_id=$this->form_model->insertorder();
			if($customer_id>0){
				$this->session->set_flashdata('notification',array('color'=>'green','type'=>'error','message'=>'Your Are Successfully Registered with us!'));
				redirect(site_url().'/welcome/menu');
				//print_r($_POST);
			}
		}
		else{
		$this->session->set_flashdata('notification',array('color'=>'red','type'=>'error','message'=>'failed please check once again!'));
		redirect(site_url().'/welcome/menu');
		}
	}
	
	
	
}
