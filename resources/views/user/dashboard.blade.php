@include('admin.head')

	<body class="is-preload">

    <?php
	/*
   include('session.php');
    $cid = $_SESSION['login_user']; 
        $uname=$_SESSION['username'];
        $userid=$_SESSION['userid'];
    date_default_timezone_set('Asia/Manila');
    $d = date("Y-m-d");
        $userid=3;
     include 'model.php';
	 */
    ?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="{{url('user/home')}}" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{url('user/home')}}">Home</a></li>
                            <li><a href="{{url('user/dashboard')}}">Dashboard</a></li>
						</ul>
						<ul class="actions stacked">
                            <?php 
                           /*
						   if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }
							*/
                            ?>
							
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->

					<section id="banner" class="style2">
                        <?php
						/*
                              $model = new Model();
                              $row = $model->fetch_user($userid);
                              if(!empty($row)){

								*/
                          ?>
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1><?php //echo $row['username']; ?></h1>
							</header>
							<div class="content">
                                <ul class="alt">
                                <p>Email:</p><li><?php //echo $row['email']; ?></li>
                                <p>Birthday:</p><li><?php //echo $row['bday']; ?></li>   
                                <p>Gender:</p><li><?php //echo $row['gender']; ?></li>
                                </ul>
							</div>
						</div>
                        
                            <?php
                           // }
                          ?>  
					</section>

				<!-- Main -->
					<div id="main">
            


                <?php
                /*
				$model = new Model();
                $rows = $model->fetch_user_review($userid);

                if(!empty($rows)){
                  foreach($rows as $row){ 
					*/
              ?>

						<!-- Three -->
							<section id="three">
								<div class="inner">
									<header class="major">
										<h2><?php //echo $row['film_title']; ?></h2>
                                        <h5>Rating <?php //echo $row['rating']; ?>/5</h5>
									</header>
                                    <h5 class="right"><?php //echo $row['review_date']; ?></h5>
									<p><?php //echo $row['review']; ?></p>
									<ul class="actions">
										<li><a href="{{url('user/edit')}}<?php //echo $row['reviewid']; ?>" class="button next">Edit</a></li>
									</ul>
								</div>
							</section>
                            <?php 
                               /*
							 }
                              }else{
                                echo '<header class="major">
										<h2>No Reviews</h2>
									</header>';
                            }
							*/
                              ?>
					</div>




			</div>

			@include('admin.script')

	</body>
</html>