<?php 


if (!function_exists('env')) {
	
	function env($params,$alternate = ''){

		$config = FCPATH.'.env';

		$env = parse_ini_file($config);

		return $env[$params]? $env[$params] : ($alternate ? $alternate : '');

	}

}

if (!function_exists('app_url')) {
	
	function app_url($params = ''){

		return site_url($params); 

	}

}

if (!function_exists('stylesheet')) {

    function stylesheet($css, $folder = NULL, $location = 'assets/') {
        $output = NULL;
        if (is_array($css)) {
            foreach ($css as $file) {
                $output .= link_tag($location . $folder . $file);
            }
        } else {
            $output .= link_tag($location . $folder . $css);
        }
        return $output;
    }

}

if (!function_exists('stylesheet_url')) {

    function stylesheet_url($link) {
        $output = link_tag($link);
        return $output;
    }

}

if (!function_exists('script')) {

    function script($js, $folder = NULL, $location = 'assets/') {
        $output = NULL;
        if (is_array($js)) {
            foreach ($js as $file) {

                $output .= '<script async type="text/javascript" src="' . base_url() . $location . $folder . $file . '"></script>';
            }
        } else {
            $output .= '<script async type="text/javascript" src="' . base_url() . $location . $folder . $js . '"></script>';
        }
        return $output;
    }

}

if (!function_exists('script_url')) {

    function script_url($link) {
        $output = '<script async type="text/javascript" src="'.$link.'"></script>';
        return $output;
    }

}

if (!function_exists('segment')) {
	
	function segment($prefix)
	{
		$ci =& get_instance();
		return $ci->uri->segment($prefix);
	}

}