<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() { 
         
         parent::__construct();
         $this->output->set_header('Access-Control-Allow-Origin: *');
         $this->output->set_header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
         $this->output->set_header('Access-Control-Allow-Origin: *');
        
	    
	    $this->load->helper('url'); 
         
         
    } 
	public function index()
	{
		$this->load->model('Customer/customerModel', 'customer'); 
		$customer = $this->customer->getAll();		
		$data['customer']= $customer;
        $this->load->view('Customer/viewCustomer', $data); 	
	}

	//Add Customer 
	public function addCustomer(){
		//LOADS DB
		$this->load->model('Customer/customerModel', 'customer'); 
		//Data to be Added
		$data = array(
			'email' => $this->input->post('email'),
			'firstName' => $this->input->post('name'),
			// 'firstName' => $this->input->post('name'),
			'phone' => $this->input->post('number'),
			'nationality' => $this->input->post('nationality')
		);
		
		echo $this->customer->insert($data);
		
	}
}
