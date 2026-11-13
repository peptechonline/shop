<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public $key= "SomeRandomSecretKey5656";
	public function __construct() {
		parent::__construct();
		$this->load->model('JwtModel');
		$this->load->model('FunctionModel');
		// $key = ; // Replace with a strong secret key
	}
	
	public function signup() {
		// Get form data
		$name = $this->input->post('name');
		$shopName = $this->input->post('shopName');
		$contactNo = $this->input->post('contactNo');
		$email = $this->input->post('email');
		$shopAddress = $this->input->post('shopAddress');
		$password = $this->input->post('password');
		$confirmPassword = $this->input->post('confirmPassword');

		// Hash the password
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

		// Set the user's status as 'Inactive' by default
        $status = 'inactive';
	
		// Insert the form data into the database
		$data = array(
			'name' => $name,
			'shop_name' => $shopName,
			'contact_no' => $contactNo,
			'email' => $email,
			'shop_address' => $shopAddress,
			'password' => $hashedPassword,
			'registration_date' => date('Y-m-d H:i:s'), // Current date and time
            'status' => $status
		);
	
		$this->db->insert('users', $data);
	
		// Check if the insertion was successful
		if ($this->db->affected_rows() > 0) {
			// Insertion successful
			echo json_encode(array('success' => 'User registered successfully'));
		} else {
			// Insertion failed
			echo json_encode(array('error' => 'User registration failed'));
		}
	}

	public function login() {
        // Get user input
        $email = $this->input->post('email');
        $password = $this->input->post('password');

		$user_id=$this->authenticate($email, $password);

        // Perform authentication (you should implement your own logic here)
        if ($user_id!=-1) {
            // Authentication successful
			$encrypted_user_id = $this->encryptUserData($user_id);
            $response = array('success' => $encrypted_user_id);
			$response['message'] = "User Logged in successfully";
 			
        } else {
            // Authentication failed
            $response = array('message' => "Login failed. Please check your credentials.");
        }

        echo json_encode($response);
    }

	private function authenticate($email, $password) {
		// Query the database to retrieve the user with the provided email
		$query = $this->db->get_where('users', array('email' => $email), 1);
	
		if ($query->num_rows() === 1) {
			$user = $query->row();
			$hashedPassword = $user->password;
	
			// Verify the provided password against the hashed password
			if (password_verify($password, $hashedPassword)) {
				// Password is correct, authentication successful
				return $user->id;
			}
		}
	
		// Authentication failed
		return -1;
	}

	
	private function encryptUserData($data) {
		
		// Generate a random IV
		$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-128-CBC'));
	
		// Encrypt the data using the IV
		$encryptedData = openssl_encrypt($data, 'AES-128-CBC', $this->key, 0, $iv);
	
		// Encode the IV and ciphertext together
		$encryptedDataWithIV = base64_encode($iv . $encryptedData);
	
		return $encryptedDataWithIV;
	}

	private function decryptUserData($encryptedData) {
		// Decode the base64 encoded input
		$data = base64_decode($encryptedData);
	
		// Extract the IV and ciphertext
		$iv_length = openssl_cipher_iv_length('AES-128-CBC');
		$iv = substr($data, 0, $iv_length);
		$ciphertext = substr($data, $iv_length);
	
		// Decrypt the data using the IV
		$decryptedData = openssl_decrypt($ciphertext, 'AES-128-CBC', $this->key, 0, $iv);
	
		return $decryptedData;
	}

	public function getUserId(){
		$user_id = $this->input->post('user_id');

		$val = $this->decryptUserData($user_id);

		echo json_encode($val);
	}


/* ---------------------------------------------------------------------------*/
/* ---------------------------------------------------------------------------*/
	//General Methods
	
	public function addProduct(){
		$customerData = array(
            'customer_name' => $this->input->post('Customer_Name'),
            'contact' => $this->input->post('Contact'),
            'customer_address' => $this->input->post('Customer_Address'),
			'model' => $this->input->post('Model'),
            'problem_device' => $this->input->post('Problem_Device'),
            'repairing_cost' => $this->input->post('Repairing_Cost'),
            'advancement_payment' => $this->input->post('Advancement_Payment'),
			'issue_data' => date('Y-m-d'),
            'delivery_date' => $this->input->post('Delivery_Date'),
			'received_by' => $this->input->post('Received_By'),
            'assigned_technician' => $this->input->post('Assigned_Technician'),
            'note' => $this->input->post('Note'),
            'imei' => $this->input->post('IMEI'),
            'password' => $this->input->post('Password'),
            'sim' => $this->input->post('SIM') ? 'yes' : 'no',
            'sim_tray' => $this->input->post('SIM_Tray') ? 'yes' : 'no',
            'back_panel' => $this->input->post('Back_Panel') ? 'yes' : 'no',
			'admin_id' => $this->decryptUserData(($this->input->post('user_id'))),
			'status' => 'Not Repaired'
           
        );

        // Insert into customer_info and get the inserted ID
        $customer = $this->FunctionModel->saveCustomerInfo($customerData);
		echo json_encode($customer);
	}

	public function fetchCustomer() {
		$contact = $this->input->get('contact');
		$data = $this->FunctionModel->getCustomerByContact($contact);
		
		
        echo json_encode($data);
    }

	public function fetchCustomerById() {
		$customer_id = $this->input->get('customer_id');
		$data = $this->FunctionModel->getCustomerById($customer_id);
		
		
        echo json_encode($data);
    }


	public function viewTransactions() {
		// echo json_encode("hello world");
		// return;
		
		$admin_id = $this->input->get('admin_id');
		$admin_id = $this->decryptUserData($admin_id);
		// echo json_encode($admin_id);
		$data['transactions'] = $this->FunctionModel->getAllTransactions($admin_id);

		foreach ($data['transactions'] as $key => $arr) {
			$number = $arr['customer_id'];
			$arr['invoice_no'] =  "SY".str_pad($number, 4, '0', STR_PAD_LEFT);// You can define this function to generate an invoice number
			$data['transactions'][$key] = $arr; // Convert the updated array back to a JSON string and store in $data
			
		}
		
		echo json_encode($data);
	}

	public function updateProduct(){

		$customerData = array(
            'customer_name' => $this->input->post('Customer_Name'),
            'contact' => $this->input->post('Contact'),
            'customer_address' => $this->input->post('Customer_Address'),
			'model' => $this->input->post('Model'),
            'problem_device' => $this->input->post('Problem_Device'),
            'repairing_cost' => $this->input->post('Repairing_Cost'),
            'advancement_payment' => $this->input->post('Advancement_Payment'),
			'issue_data' => date('Y-m-d'),
            'delivery_date' => $this->input->post('Delivery_Date'),
			'received_by' => $this->input->post('Received_By'),
            'assigned_technician' => $this->input->post('Assigned_Technician'),
            'note' => $this->input->post('Note'),
            'imei' => $this->input->post('IMEI'),
            'password' => $this->input->post('Password'),
            'sim' => $this->input->post('SIM') ? 'yes' : 'no',
            'sim_tray' => $this->input->post('SIM_Tray') ? 'yes' : 'no',
            'back_panel' => $this->input->post('Back_Panel') ? 'yes' : 'no',
			'admin_id' => $this->decryptUserData(($this->input->post('user_id'))),
			'status' => 'Not Repaired'
           
        );

		// echo json_encode($this->input->post());

        // Insert into customer_info and get the inserted ID
        $customer = $this->FunctionModel->updateCustomerInfo($customerData);
		echo json_encode($customer);
	}

	public function getDashboardData() {
		$user_id_data = $this->input->post('user_id');
		$user_id = $this->decryptUserData($user_id_data);
		$start_date = $this->input->post('start_date');

		// Fetch the number of total repairing
		$totalRepairing = $this->FunctionModel->getTotalRepairingCount($start_date, $user_id);

		// Fetch the number of pending repairing
		$pendingRepairing = $this->FunctionModel->getPendingRepairingCount($start_date, $user_id);
	
		// Fetch the number of pending delivery
		$pendingDelivery = $this->FunctionModel->getPendingDeliveryCount($start_date, $user_id);
	
		// Fetch the total amount earned
		$totalAmountEarned = $this->FunctionModel->getTotalAmountEarned($start_date, $user_id);	
		

		$dashboardData = array(
			'total_repairing' => $totalRepairing,
			'pending_repairing' => $pendingRepairing,
			'pending_delivery' => $pendingDelivery,
			'total_amount_earned' => $totalAmountEarned
		);
	
		echo json_encode($dashboardData);
    
	}
	
	
}
