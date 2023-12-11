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

.signin-container {
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
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="login.php" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Main -->

<div class="signin-container">

    
<!-- Form -->
          <?php
		  /*
              include 'model.php';
              $model = new Model();
              $insert = $model->insert();
			  */
          ?>
			<h3>CREATE ACCOUNT</h3>
			<form action ="" method = "post">
				<div class="form-row">
				    <div class="col-md-5 mb-3">
				      <label for="uname">User Name</label>
				      <input type="text" class="form-control" name="name" placeholder="User Name" value="" required/>
				    </div>
				</div>
                
				<div class="form-row">
				    <div class="col-md-5 mb-3">
				      <label for="email">Email</label>
				      <input type="text" class="form-control" name="email" placeholder="Please input email" value="" required/>
				    </div>
				    <div class="col-md-5 mb-3">
				      <label for="password">Password</label>
				        <input type="password" class="form-control" name="password"  />
				    </div>
				</div>

				 <div class="form-row">
					   <div class="col-md-3 mb-3">
					      <label for="bdy">Birthdate:</label>
						  <input type="date" id="bdy" name="bdy"  class="form-control" required>
					    </div> 
				     <div class="col-md-3 mb-3">
					      <label for="gender">Gender</label>
					      <select class="form-control form-control" name="gender">
							   <option>Male</option>
							   <option>Female</option>
							  
							</select>
					    </div>
				</div>
                

<div class="form-group">
				 
                <br>

            <div class="action">
                <button name="submit" class="primary"  class="button" type="submit" >Submit</button>
                <button  onclick="window.location.href='login.php';" name="return"   type="submit">Return</button>
            </div>
</div> 
                
        

</div>
    </div> 
        </div> 
        
        
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>
</html>
