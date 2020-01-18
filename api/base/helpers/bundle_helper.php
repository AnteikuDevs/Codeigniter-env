<?php 


if (!function_exists('env')) {
	
	function env($params,$alternate = ''){

		$config = str_replace("\\".$_SERVER['CI_API'], "", str_replace("/".$_SERVER['CI_API'], "", FCPATH)).'.env';;

		$env = parse_ini_file($config);

		return $env[$params]? $env[$params] : ($alternate ? $alternate : '');

	}

}

if (!function_exists('app_url')) {
	
	function app_url($params = ''){

		return site_url($params); 

	}

}

