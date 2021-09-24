<?php

defined('BASEPATH') or exit('No direct script access allowed');

public function index()
	{
        $this->load->view('layout/app')
		$this->load->view('page/details/index');
	}
