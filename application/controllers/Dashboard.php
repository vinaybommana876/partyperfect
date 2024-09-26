<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('homepage');
		// $this->load->view('test');
	}

	public function Refund_policy()
	{
		$this->load->view('refund');
	}

	public function Register()
	{
		$this->load->view('register');
	}

	public function openform()
	{
		$this->load->view('openform');
	}

	public function calender()
	{
		$this->load->view('calender');
	}

	public function formdetails()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$day = $this->input->post('day');
			$month = $this->input->post('month');
			$year = $this->input->post('year');
			$slots = json_decode($this->input->post('slots'), true); // Decode the JSON string into an array

			$viewData = [
				'day' => $day,
				'month' => $month,
				'year' => $year,
				'slots' => $slots
			];

			$this->load->view('formdetails', $viewData);
		} else {
			show_error('Invalid request method.', 405);
		}
	}




	public function book_slots()
	{
		$date = $this->input->post('date');
		$slots = $this->input->post('slots');

		if (empty($slots) || !is_array($slots)) {
			$response = array(
				'status' => 'error',
				'message' => 'No time slots selected.'
			);
			echo json_encode($response);
			return;
		}

		$available = true;
		foreach ($slots as $slot) {
			$query = $this->db->get_where('bookings', array('date' => $date, 'time' => $slot));
			if ($query->num_rows() > 0) {
				$available = false;
				break;
			}
		}

		if ($available) {
			foreach ($slots as $slot) {
				$data = array(
					'date' => $date,
					'time' => $slot
				);
				$this->db->insert('bookings', $data);
			}
			$response = array(
				'status' => 'success',
				'message' => 'Slots booked successfully.'
			);
		} else {
			$response = array(
				'status' => 'error',
				'message' => 'One or more slots are already booked.'
			);
		}

		echo json_encode($response);
	}

	public function save_booking_details()
	{
		$this->form_validation->set_rules('booking-name', 'Booking Name', 'required');
		$this->form_validation->set_rules('whatsapp-number', 'Whatsapp Number', 'required');
		$this->form_validation->set_rules('email-id', 'Email ID', 'required|valid_email');
		$this->form_validation->set_rules('decoration', 'Decoration', 'required');

		if ($this->form_validation->run() == FALSE) {
			$response = array(
				'status' => 'error',
				'message' => validation_errors()
			);
			echo json_encode($response);
			return;
		}

		$data = array(
			'booking_name' => "hello",
			'number_of_people' => $this->input->post('number-of-people'),
			'whatsapp_number' => $this->input->post('whatsapp-number'),
			'email_id' => $this->input->post('email-id'),
			'decoration' => $this->input->post('decoration')
		);
		echo json_encode($data);

		$this->db->insert('bookings', $data);

		$response = array(
			'status' => 'success',
			'message' => 'Booking details saved successfully.'
		);

		echo json_encode($response);
	}

	public function save_selected_buttons()
	{
		// Receive data from Ajax call
		$selectedButtons = $this->input->post('selectedButtons');
		echo json_encode($selectedButtons);

		// Example: Save to database or perform any required action
		// Example: echo or return response (optional)
	}
}
