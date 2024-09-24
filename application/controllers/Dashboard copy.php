<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->view('homepage');
	}

	public function Refund_policy() {
        $this->load->view('refund');
    }

	public function Register() {
        $this->load->view('register');
    }

	public function openform() {
        $this->load->view('openform');
    }
	public function calender()
	{
		$this->load->view('calender');
	}

	public function formdetails()
	{
		$this->load->view('formdetails');
	}
}

