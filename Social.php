<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatibla" content="TE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Signin with Google</title>
<script src="http://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="929051558591-j8v18ua9s0r7tilaukbr3dut4crn3s0v.apps.googleusercontent.com">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="Social.css" type="text/css" rel="alternate stylesheet">
</head>
<body>
	<div class="login-box">
    <div class="googlesignin">
    	<form action="">
    	<h1 align="center"> Login</h1>
    	<div class="textbox" align="center">
        	<input type="text" placeholder="Username" name="" value="">
         </div>
         
         <br>
         
         <div class="textbox" align="center">
         	<input type="password" placeholder="Password" name="" value="">
         </div>
         <br>
        <div align="center">
        <input  class="btn" type="button" name="" value="Sign In">	
        </div>
        
        </form>
             <h1 align="center"> OR</h1>
             <div class="g-signin2" align="center" data-onsuccess="onSignIn" data-width="250" data-height="50" data-prompt="select_account"></div>		
             </div>
             </div>
             
    <script >
		
		function LogOut(){
			
			var at= gapi.auth2.getAuthInstance();
			at.signOut();
			
	}
	function onSignIn(user){
		var userdata=user.getBasicProfile();
		console.log(userdata.getId());
		console.log(userdata.getName());
		console.log(userdata.getEmail());
		console.log(userdata.getImageUrl());

	}
		
	
	</script>

</body>
</html>