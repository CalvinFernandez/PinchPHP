<!DOCTYPE html> 
<html>

<head>
	<title>Pinchapp</title>
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="upstart.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Pinch</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Receive <span id="username"></span></h2>
		
		<p>You are now in the Receive page.Once your friend has picked up their image, they can drop it anywhere here </p>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
                 <li><a href="index.php" id="home" data-icon="custom">Home</a></li>
                <li><a href="get.php" id="key" data-icon="custom" class="ui-btn-active">Receive</a></li>
                <li><a href="send.php" id="beer" data-icon="custom" >Send</a></li>
                <li><a href="help.php" id="help" data-icon="custom">Help</a></li>
			</ul>
		</div>
	</div>
</div>

</div><!-- /page one -->



</body>
</html>