@include('admin.head')

<body class="is-preload">

<?php
/*   include('session.php');
    include('admin_config.php');
    $cid = $_SESSION['login_user']; 
        
        if($cid!='admin#'){
            echo "<script>window.location.href = 'logout.php';</script>";
        }
    date_default_timezone_set('Asia/Manila');
    $d = date("Y-m-d");
    */
    ?>
		<!-- Wrapper -->
<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="#" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{url('admin/user')}}">Dashboard</a></li>
						</ul>
						<ul class="actions stacked">
                            <?php 
                           /* if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }*/
                            ?>
							
						</ul>
					</nav>


				<!-- Main -->
 <div id="main" class="alt">
    
<section id="one">
<div class="box">
<?php
  
  /*$model = new Model();
  $insert = $model->insert();*/
?>
<form action="" method="post">
<div class="row gtr-uniform">
   
    <h3>Title</h3>
    <div class="col-3 col-12-xsmall">
        <input type="text" name="title" id="title" placeholder="Title">
    </div>
    <h3>Direcator</h3>
    <div class="col-3 col-12-xsmall">
        <input type="text" name="director" id="director" placeholder="Name">
    </div>
    <h3>Release</h3>
    <div class="col-2 col-12-xsmall">
        <input type="text" name="date" id="date" placeholder="Date">
    </div>

    <!-- Break -->
    <div class="col-12">
        <select name="genre" id="genre">
            <option value="">- Genre -</option>
            <option value="1">Action</option>
            <option value="2">Adventure</option>
            <option value="3">Comedy</option>
            <option value="4">Drama</option>
            <option value="5">Fantacy</option>
            <option value="6">Horror</option>
            <option value="7">Romance</option>
            <option value="8">Sci-Fi</option>
        </select>
    </div>
    <!-- Break -->
    <h3>Casts</h3>
    <div class="col-11 col-12-xsmall">
        <input type="text" name="cast" id="cast" placeholder="Comma break">
    </div>
    <!-- Break -->
    <h3>Plot</h3>
<div class="col-12">
    <input type="text" name="plot" id="plot" placeholder="Plot Line">
</div>
    
    
    <div class="col-12">
        <button type="submit" name="submit" class="primary">Submit</button>
        <a href="{{url('admin/film')}}" class="button">Cancel</a>
    </div>
</div>
</form>
    </div>
<hr>

<div class="table-wrapper">

  <div class="container">   
      

      
</div>    
    
</div>
                    

    </section> 
</div>

    					
</div>

@include('admin.script')


	</body>
</html>