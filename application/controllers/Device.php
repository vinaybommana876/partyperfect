<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends CI_Controller {

    public function index()
    {
        $this->load->view('fingerprint');
    }

    public function generate_fingerprint()
    {
        // Function to generate a unique fingerprint based on device information
        function generateFingerprint($deviceInfoJson) {
            return hash('sha256', $deviceInfoJson);
        }

        // Check if the request is a POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the device information JSON from the POST request
            $deviceInfoJson = file_get_contents('php://input');
            
            // Decode the JSON to get an associative array
            $deviceInfo = json_decode($deviceInfoJson, true);

            // Get the IP address
            $ipAddress = $this->input->ip_address();
            $deviceInfo['ip_address'] = $ipAddress;

            // Generate the fingerprint
            $fingerprint = generateFingerprint(json_encode($deviceInfo));
            
            // Extract UTM parameters and event type
            $utm_source = isset($deviceInfo['utm_source']) ? $deviceInfo['utm_source'] : '';
			$utm_medium = isset($deviceInfo['utm_medium']) ? $deviceInfo['utm_medium'] : '';
			$utm_campaing = isset($deviceInfo['utm_campaing']) ? $deviceInfo['utm_campaing'] : '';
            $event_type = isset($deviceInfo['event_type']) ? $deviceInfo['event_type'] : '';

            // Load the database library
            $this->load->database();

            // Check if the fingerprint already exists
            $this->db->where('device_fingerprint', $fingerprint);
            $query = $this->db->get('device_data');
            
            if ($query->num_rows() > 0) {
                // Fingerprint already exists
                $response = [
                    'status' => 'existing',
                    'message' => 'Device fingerprint already registered',
                    'device_fingerprint' => $fingerprint,
                    'ip_address' => $ipAddress
                ];
            } else {
                // Prepare data for insertion
                $data = array(
                    'device_fingerprint' => $fingerprint,
                    'ip_address' => $ipAddress,
                    'utm_source' => $utm_source,
					'utm_medium' => $utm_medium,
					'utm_campaign' => $utm_campaing,
                    'event_type' => $event_type,
                    'created_at' => date('Y-m-d H:i:s')
                );

                // Insert data into database
                $this->db->insert('device_data', $data);
                
                // Return JSON response
                $response = [
                    'status' => 'success',
                    'message' => 'Device fingerprint registered',
                    'device_fingerprint' => $fingerprint,
                    'ip_address' => $ipAddress
                ];
            }

            // Return JSON response
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
    }
}
?>
