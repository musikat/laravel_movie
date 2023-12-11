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
    */
    ?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="home.php" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
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

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
          <?php
             /*
             include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['rating']) && isset($_POST['message'])) {
                  if (!empty($_POST['rating']) && !empty($_POST['message'])) {
                     
                    $data['id'] = $id;
                    $data['rating'] = $_POST['rating'];
                    $data['message'] = $_POST['message'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'dashboard.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'dashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: rev_edit.php?id=$id");
                  }
                }
              }
              */
          ?>                        
        
<section id="one">
    <form action="" method="post">
    <div class="inner">
          <?php
            /*
              $row = $model->fetch_rev1($id);
              if(!empty($row)){
                */
          ?>

				<header class="major">
				        <h1><?php //echo $row['film_title']; ?></h1>
				</header>
                                    
                <div class="col-2 col-12-xsmall">
				    <input type="text" name="rating" id="rating" value="<?php //echo $row['rating']; ?>" placeholder="Rating">
				</div>
                                    
            <div class="col-12 __web-inspector-hide-shortcut__">
                    <textarea name="message" id="message" placeholder="User Review" rows="6"><?php //echo $row['review']; ?></textarea>
            </div>
                                    
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" name="update" value="Submit" class="primary"></li>
                                <li><a href="dashboard.php" class="button ">Return</a></li>
                            </ul>
                        </div>
                                    
                        <?php
                        /*
                            }else{
                            echo "<h1>No Data</h1>";
                          }
                          */
                          ?>
    </div>
    </form>
</section>

					</div>




			</div>

		<!-- Scripts -->
    @include('admin.script')

	</body>
</html>