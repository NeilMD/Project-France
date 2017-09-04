<?php 
   Class CustomerModel extends CI_Model {
	
      Public function __construct() { 
         parent::__construct(); 
         $this->load->database();

      } 

      public function getAll(){      
         
         $query = $this->db->get("Customer"); 
         return  $query->result_array();
      }

      public function insert($data){      

            $this->db->insert("Customer", $data);
            return $this->db->insert_id();   
      }

    

      public function delete($customerId){
      	 if ($this->db->delete("Customer", "customerID = ".$customerId)) { 
            return true; 
         } 
      }

      public function update($data, $customerId){
      	 $this->db->set($data); 
         $this->db->where("customerID", $old_roll_no); 
         $this->db->update("Customer", $data); 

      }
		
   } 
?>