<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whatsapp extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		if (!$this->agent->is_mobile()) {
			//redirect('https://www.google.com');
		}
		$this->load->model('whatsapp_model');
	}

	public function index()
	{
		$this->load->view('loan_form');
	}

	public function send_notifications($salary_type){
		// if(date("Hi") > 2100 || date("Hi") < 800){
		// 	// Run Code
		// 	echo date("Hi");
		// 	echo "CodeExit";
		// 	return;
		// }

		if($salary_type == 1){
			$emp_type = 'SALARIED';
			// $link = "https://s1x.in/S2eDqm";
            $link = "https://s1x.in/7qSJxY";
		} else {
			$emp_type = 'SELF-EMPLOYEE';
			// $link = "https://s1x.in/QfZl2I";
            $link = "https://s1x.in/7qSJxY";

		}
		
		$limit = rand(1500,3000);
		$numbers = $this->whatsapp_model->getMobileNumbers($limit, $emp_type);
		// echo count($numbers);exit;
		
		if(count($numbers) > 0){
			$message_loop = array();
			//Random Templeate Selection
			// $ran = array('series_1', 'series_2', 'series_3', 'series_4' , 'series_5');
            $ran = array('series_bt_1', 'series_bt_2', 'series_bt_3', 'series_bt_4' , 'series_bt_5');
			$tempName = $ran[array_rand($ran, 1)];

			foreach ($numbers as $n) {
				$lead_id[] = $n['lead_id']; 
				$mobile[] = $n['mobile'];
				$message_loop[] = array(
					"message" => array(
						"content" => array(
							"type" => "TEMPLATE",
							"template" => array(
								"templateId" => $tempName,
								"parameterValues" => (object) array(
									"0" => $link,
									// "1" => "KYC Details:",
									// "2" => "www.googel.com",
									// "3" => "Axis Bank",
								)
							),
						),
						"recipient" => array(
							"to" => "91".$n['mobile'],
							"reference" => array(
								"cust_ref" => ""
							)
						)
					)
				);
			}

			$message = array(
			"channel" => "WABA",
			"campaignId" => "CAMP001",
			"sender" => array(
			"from" => "919154169750"
			),
			"metaData" => array(
			"version" => "v1.0.9"
			),
			"preferences" => array(
			"webHookDNId" => "SANDBOXDEMO123"
			),
			"messages" => $message_loop
			);
		
			// 1 == GTech, 2 == Pinnacle, 3 == Disable Notifications
			$notification_client = 1;

			if($notification_client == 1) {

			//WHATSAPP API CURL Call STARTS
			$api_token = "XfFIUB4DRpWDwPl924An8Q==";
			$api_endpoint = 'https://rcmapi.instaalerts.zone/services/rcm/sendBulkMessage';

			$ch = curl_init($api_endpoint);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authentication: Bearer $api_token"));
			$result = curl_exec($ch);
			curl_close($ch);
			//WHATSAPP API CURL Call ENDS
			echo $result;

			$result = $this->whatsapp_model->updateMessageStatus($lead_id, $mobile);
			// echo $this->db->last_query();

			} else {
				echo json_encode(array('status' => 'fail', "message" => "Notifications Disabled!"));
			}
	//IF Ending...	
	}
	}

	function testCode(){
		echo date("Hi");
		if(date("Hi") > 2100 || date("Hi") < 800){
			// Run Code
			echo date("Hi");
			echo "CodeExit";
			return;
		}
	}



}