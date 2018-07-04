<?php
	Class Settings_model extends CI_Model{
	   public function __construct(){
		$this->load->database();
	}
	function getalltable_details(){
		
		$this->db->select("*");
		$this->db->from("rms_table_details");
		$query=$this->db->get();
		return $query->result();
	}
	function getallfood_details(){
		
		$this->db->select("*");
		$this->db->from("rms_food_details");
		$query=$this->db->get();
		return $query->result();
	}
	function getallcustomer_details(){
		
		$this->db->select("*");
		$this->db->from("rms_customer_details");
		$query=$this->db->get();
		return $query->result();
	}
	function getallord_details(){
		
		$this->db->select("*");
		$this->db->from("rms_order_details");
		$query=$this->db->get();
		return $query->result();
	}
	
	function getallorder_details(){
		
		$this->db->select("ord_det.order_id,food.food_name,cust.customer_name,ord_det.status");
		$this->db->from("rms_food_details food");
		$this->db->join("rms_order_details ord_det", "ord_det.food_id = food.food_id");
		
		$this->db->join("rms_customer_details cust", "cust.customer_id = ord_det.customer_id");
		

		$query=$this->db->get();
		return $query->result();
	}
	
	
	
	
	
	function getalllunch_details(){
		
		$this->db->select("*");
		$this->db->from("rms_food_details");
		$query=$this->db->get();
		return $query->result();
	}
	
	
	
	
	
	
	}
	?>