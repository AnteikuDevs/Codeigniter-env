<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index_get()
	{
		$result['status'] = 200;
		$result['message'] = 'Selamat Datang di '.env('APP_NAME');
		return $this->response($result);
	}
}
