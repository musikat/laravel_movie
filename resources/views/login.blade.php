<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
    
<style>
    body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    text-align: center;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
}


    </style>
 
<?php/*
$error = ' ';    
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['uid']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT userid FROM movie_review.user WHERE username = '$myusername' and password = '$mypassword'";
       
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $word = "#";

         // Test if string contains the word 
        if(strpos($myusername, $word) !== false){
                $_SESSION['login_user'] = $myusername;
                header("location: admin_user.php");
            } else{
                $_SESSION['login_user'] = $myusername;
                header("location: home.php");
            } 
                    
          
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
?>




	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="{{url('home')}}" class="logo"><strong>Moviefy</strong> <span>by Laravel</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{url('home')}}">Home</a></li>

						</ul>
						<ul class="actions stacked">
							
							<li><a href="{{url('login')}}" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Main -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0&appId=289377444078119" nonce="G9FQ2ars"></script>
<div class="login-container">

    
<!-- Form -->
    <h1>Login</h1>
    
<form action ="" method = "post">
    <div class="content">
      <div class="input-field">
        <input type="text" name="uid" placeholder="Username" autocomplete="nope">
      </div>
 
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" autocomplete="new-password">
      </div>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php //echo $error; ?></div>
        <!--<a href="#" class="link">Forgot Your Password?</a>--> 
    </div>
    
    <div class="col-12">
    <div class="action">
        <button onclick="location.href='user_signup.php'" type="button">Register</button>
        <button type="submit" class="primary">Sign In</button>
    </div>
    </div>
    
</form>
    
<div class="fb-login-button" data-width="" data-size="" data-button-type="" data-layout="" data-auto-logout-link="false" data-use-continue-as="false"></div>
    
<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>  
    
    
    
</div>
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '289377444078119',
      cookie     : true,
      xfbml      : true,
      version    : '18.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    
    

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>
