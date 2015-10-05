<?php
	include_once('settings.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<title><?php echo $settings['app_title']; ?></title>
		<meta name='description' content=''>
		<meta 'viewport' content='initial-scale=1, maximum-scale=1, width=device-width'>
		<link rel='stylesheet' href='../bower_components/bootstrap/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='../css/<?php echo $settings["app_name"]; ?>/project.less.css'>
	</head>
	<body class='flex-container flex-vertical' ng-app='app' ng-controller='appCtrl'>
		<div class='flex-row header' ng-include="'header.php'"></div>
		<div class='flex-row body' ng-include="'body.php'"></div>
		<div class='flex-row footer' ng-include="'footer.php'"></div>
	
		<script type='text/javascript' src='../bower_components/jquery/dist/jquery.js'></script>
		<script type='text/javascript' src='../bower_components/bootstrap/dist/js/bootstrap.js'></script>
		<script type='text/javascript' src='../bower_components/angular/angular.js'></script>
		<script type='text/javascript' src='../bower_components/bootstrap/dist/js/bootstrap.min.js'></script>
		<script>
			var uid = "<?php echo $_GET['uid'];?>"; 
		</script>
		<script type='text/javascript' src='../js/<?php echo $settings["app_name"]; ?>/project.js'></script>
	
	
	</body>	
</html>
