<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whatsapp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
        if (!$this->agent->is_mobile()) {
            // Redirect if not mobile
            // redirect('https://www.google.com');
        }
    }

    public function index()
    {
        $this->load->view('loan_form');
    }

    public function send_notifications($salary_type)
    {
        // Static mobile numbers for testing
        $numbers = [
            ['lead_id' => 1, 'mobile' => '6303877616'],
            ['lead_id' => 2, 'mobile' => '9347551096']
            // Add more static numbers as needed
        ];

        if ($salary_type == 1) {
            $emp_type = 'SALARIED';
            $link = "https://s1x.in/7qSJxY";
        } else {
            $emp_type = 'SELF-EMPLOYEE';
            $link = "https://s1x.in/7qSJxY";
        }

        $message_loop = [];
        $ran = ['series_bt_1', 'series_bt_2', 'series_bt_3', 'series_bt_4', 'series_bt_5'];
        $tempName = $ran[array_rand($ran)];

        foreach ($numbers as $n) {
            $message_loop[] = array(
                "message" => array(
                    "content" => array(
                        "type" => "TEMPLATE",
                        "template" => array(
                            "templateId" => $tempName,
                            "parameterValues" => (object) array(
                                "0" => $link,
                            )
                        ),
                    ),
                    "recipient" => array(
                        "to" => "91" . $n['mobile'],
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

        // Simulate sending the message via API
        $api_token = "XfFIUB4DRpWDwPl924An8Q==";
        $api_endpoint = 'https://rcmapi.instaalerts.zone/services/rcm/sendBulkMessage';

        $ch = curl_init($api_endpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authentication: Bearer $api_token"));
        $result = curl_exec($ch);
        curl_close($ch);

        echo $result;
    }

    function testCode()
    {
        echo date("Hi");
        if (date("Hi") > 2100 || date("Hi") < 800) {
            echo date("Hi");
            echo "CodeExit";
            return;
        }
    }
}
