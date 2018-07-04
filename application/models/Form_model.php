<?php
	Class Form_model extends CI_Model{
	   public function __construct(){
		$this->load->database();
	}
	function insertorder(){
		$data=array(
		'customer_name'=>trim($this->input->post('customer_name')),
		

		);
		 $this->db->insert("rms_customer_details", $data);
		 $customer_id=$this->db->insert_id();
		 
		 $data1=array(
		'customer_id'=>$customer_id,
		'food_id'=>trim($this->input->post('food_id')),
		
	     
		);
		 $this->db->insert("rms_order_details", $data1);
          return $customer_id; 
	}
	
	
	}
	?>