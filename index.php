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

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
	  <h1>Pinch</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Welcome </h2>
		
		<p>This is the pinch app.</p>
		<p><a href="#log" data-role="button">Login </a></p>
		<p><a href="#register" data-role="button">Register</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
                <li><a href="index.php" id="home" data-icon="custom" class="ui-btn-active">Home</a></li>
                <li><a href="get.php" id="key" data-icon="custom">Receive</a></li>
                <li><a href="send.php" id="beer" data-icon="custom">Send</a></li>
                <li><a href="help.php" id="help" data-icon="custom">Help</a></li>
		</ul>
		</div>
	</div>
</div>

</div><!-- /page one -->


<!-- Start of login page: #login -->

<div data-role="page"id="log">

    <div data-role="header">
        <h1>Pinch</h1>
    </div><!-- /header -->

    <div data-role="content">
      <h2> Log in</h>
      <p> Please enter your username and password </p>
         <div data-role="fieldcontain" class="ui-hide-label">
			<form action="input.php" method="post">
				<input type="text" name="Username" placeholder="Username"/><br>
				<input type="password" name="Password" placeholder="Password"/><br>
				<input type="submit" value="Submit"/>
			</form>
        </div>
    </div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
        <div data-role="navbar" class="nav-glyphish-example" data-grid="c">
            <ul>
                <li><a href="index.php" id="home" data-icon="custom" class="ui-btn-active">Home</a></li>
                <li><a href="get.php" id="key" data-icon="custom">Receive</a></li>
                <li><a href="send.php" id="beer" data-icon="custom">Send</a></li>
                <li><a href="help.php" id="help" data-icon="custom">Help</a></li>
            </ul>
        </div>
    </div>
</div>

</div><!-- / login -->


<!-- Start of login page: #register -->

<div data-role="page"id="register">

    <div data-role="header">
        <h1>Pinch</h1>
    </div><!-- /header -->

    <div data-role="content">
       <h2> Registration</h2>

      <p> New to Pinch App? Register Below</p>
         <div data-role="fieldcontain" class="ui-hide-label">
	   <form action="index.php" method="post">
	   <input type="text" name="username" placeholder="Username"/><br>
	   <input type="password" name="password"placeholder="Password"/> <br>
	   <input type="password" name="retypePassword" placeholder="Reenter Password"/> <br>
	   <input type="submit" value="Register"/>
	   </form>
        </div>
    </div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
        <div data-role="navbar" class="nav-glyphish-example" data-grid="c">
            <ul>
                <li><a href="index.php" id="home" data-icon="custom" class="ui-btn-active">Home</a></li>
                <li><a href="get.php" id="key" data-icon="custom" >Receive</a></li>
                <li><a href="send.php" id="beer" data-icon="custom">Send</a></li>
                <li><a href="help.php" id="help" data-icon="custom">Help</a></li>
            </ul>
        </div>
    </div>
</div>

</div><!-- / register page -->
</body>
</html>