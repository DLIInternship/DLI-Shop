<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Details extends MY_Controller
{
	public function index()
	{
			$this->load->view('layouts/app');
			$this->load->view('page/details/index');
	}
}