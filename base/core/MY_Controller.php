<?php 

class MY_Controller extends CI_Controller
{
    protected $app_default = 'app/default';

    protected $app_css = 'app_css';

    protected $app_js = 'app_js';

    public function __construct() {
       parent::__construct();
    }

    public function load_view($params,$data)
    {

    	$css 	= isset($params['css'])?$params['css'] : '';
    	$view 	= $params['view'];
    	$js 	= isset($params['js'])?$params['js'] : '';

    	$config['default_css'] 	= $css?$this->load->view("$this->app_css/".$css,$data,true) : '';
    	$config['default_body'] = $this->load->view($view,$data,true);
    	$config['default_js'] 	= $js?$this->load->view("$this->app_js/".$js,$data,true) : '';

    	$this->load->view($this->app_default,$config);

    }

}