
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
	<title><?= env('APP_NAME'); ?> | 404 - Not Found</title>

	<style type="text/css">

::selection { background-color: #f07746; color: #fff; }
::-moz-selection { background-color: #f07746; color: #fff; }

body {
	background-color: #fff;
	margin: 40px auto;
	max-width: 1024px;
	font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
	color: #808080;
}

a {
	color: #dd4814;
	background-color: transparent;
	font-weight: normal;
	text-decoration: none;
}

a:hover {
	color: #97310e;
}

h1 {
	color: #fff;
	background-color: #dd4814;
	border-bottom: 1px solid #d0d0d0;
	font-size: 22px;
	font-weight: bold;
	margin: 0 0 14px 0;
	padding: 5px 10px;
	line-height: 40px;
}

h1 img {
	display: block;
}

h2 {
	color:#404040;
	margin:0;
	padding:0 0 10px 0;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 13px;
	background-color: #f5f5f5;
	border: 1px solid #e3e3e3;
	border-radius: 4px;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body {
	margin: 0 15px 0 15px;
	min-height: 96px;
}

p {
	margin: 0 0 10px;
	padding:0;
}

p.footer {
	text-align: right;
	font-size: 12px;
	border-top: 1px solid #d0d0d0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
	background:#8ba8af;
	color:#fff;
}

#container {
	margin: 10px;
	border: 1px solid #d0d0d0;
	box-shadow: 0 0 8px #d0d0d0;
	border-radius: 4px;
}
</style>
</head>
<body>

	
	<div id="container">
		<h1><?= $heading; ?></h1>

		<div id="body">
			<h3><?= $message; ?></h3>
		</div>

		<p class="footer"><?= env('APP_NAME'); ?></p>
	</div>


</body>
</html>