<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		$params['view'] = 'welcome_message';
		$params['css'] = 'welcome_message';

		$this->load_view($params,$data);
	}
}
