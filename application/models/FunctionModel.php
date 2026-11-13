<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FunctionModel extends CI_Model {

    public function saveCustomerInfo($data) {
        $this->db->insert('customer_data', $data);
        return $this->db->insert_id();  // Return the inserted ID for use in the product_info table
    }

    public function getCustomerByContact($contact) {
        $this->db->where('contact', $contact);
        $this->db->order_by('customer_id', 'DESC');  // Order by customer_id in descending order
        $this->db->limit(1);  // Limit the results to just one row
        $query = $this->db->get('customer_data');
    
        return $query->row_array();  // Get a single row as an associative array
    
    }

    public function getCustomerById($customer_id) {
        $this->db->where('customer_id', $customer_id);
        $this->db->order_by('customer_id', 'DESC');  // Order by customer_id in descending order
        $this->db->limit(1);  // Limit the results to just one row
        $query = $this->db->get('customer_data');
    
        return $query->row_array();  // Get a single row as an associative array
    
    }

    public function getAllTransactions($admin_id) {
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get('customer_data');
        return $query->result_array(); // Returns the result as an array of arrays

    }

    public function updateCustomerInfo($data) {
        $this->db->where('customer_id', $data['customer_id']);
        $this->db->update('customer_data', $data);
        return $this->db->affected_rows();  // Returns the number of rows affected by the query
    }

//Dashboard data functions
    public function getTotalRepairingCount($start_date, $user_id) {
        $this->db->where('admin_id', $user_id);
        $this->db->where('issue_data >=', $start_date);
        return $this->db->count_all_results('customer_data');
    }

    public function getPendingRepairingCount($start_date, $user_id) {
        $this->db->where('admin_id', $user_id);
        $this->db->where('issue_data >=', $start_date);
        $this->db->where('status', 'Not Repaired');
        return $this->db->count_all_results('customer_data');
    }

    public function getPendingDeliveryCount($start_date, $user_id) {
        $this->db->where('admin_id', $user_id);
        $this->db->where('delivery_date >=', $start_date);
        $this->db->where('status', 'Repaired');
        return $this->db->count_all_results('customer_data');
    }

    public function getTotalAmountEarned($start_date, $user_id) {
        $this->db->select_sum('repairing_cost');
        $this->db->where('admin_id', $user_id);
        $this->db->where('issue_data >=', $start_date);
        $query = $this->db->get('customer_data');
        return $query->row()->repairing_cost;
    }
    
}
?>
