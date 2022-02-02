<!DOCTYPE HTML>
<?php
	require_once 'session.php';
	require_once 'account_name.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Danok Football Membership  System</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Danok Football Membership  System</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class = "glyphicon glyphicon-user"></span> <?php echo $acc_name?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
		</div>
	</nav>
	<div class = "container-fluid">
		<ul class="nav nav-pills">
			<li><a href="home.php">Home</a></li>
			<li><a href="account.php">Administrator</a></li>
			<li><a href="member.php">Member</a></li>
			<li class="active"><a href="aboutus.php">About Us</a></li>
		</ul>
		<br />
	
		<br/>

<div>

	<div class = "alert alert-success"><center><h3>VISION</h3></center></div>
	<h4 style = "text-indent:50px;">Excellence in producing highly skilled, well qualified and globally competitive </h4>
	<br />

	<div class = "alert alert-success"><center><h3>CLUB LEADER</h3></center></div>
	<ol>
		<li><h4>NIK HAFIFI BIN MAMAT</h4></li>               <li><h4>MOHAMAD ASRI RAFIZI</h4></li>																
		<li><h4>MOHAMAD ISLAHUDDIN BIN ABDUL MALEK</h4></li>  <li><h4>MOHAMAD ASYRAF</h4></li>
		<li><h4>MOHAMMAD HAISYAM</h4></li>
		
	</ol>
</div>

</div>
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
	<label class = "pull-right">&copy; <?php echo date('Y', strtotime('+8 HOURS'))?> Developed By: <b>RSC2405B</b></label>
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
</html>