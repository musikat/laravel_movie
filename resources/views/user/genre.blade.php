@include('admin.head')

	<body class="is-preload">

    <?php
   include('session.php');
    $cid = $_SESSION['login_user']; 
    date_default_timezone_set('Asia/Manila');
    $d = date("Y-m-d");
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
							<li><a href="home.php">Home</a></li>
                            <li><a href="dashboard.php">Dashboard</a></li>
						</ul>
						<ul class="actions stacked">
                            <?php 
                            if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }
                            ?>
							
						</ul>
					</nav>
                </div>
<!-- SELECT * FROM movie_review.film where genre = '6'; -->        
        
<div class="container">   
    

        <div class="custom-search">
            <input class="form-control cutsom-input" type="text" id="Search" onkeyup="myFunction()" placeholder="Search" data-table="table1" value=''> 
        </div> 

 
    
<div class="box">
            
<div class="row gtr-10 gtr-uniform ">
    
          <?php
                include 'model.php';
                $model = new Model();
                $id = $_REQUEST['genre'];
                $rows = $model->fetch_genre($id);
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
                     
            $row1 = $model->fetch_ave($row['filmID']);
              if(!empty($row1)){
              $rate=$row1['avg(rating)'];
              }
    
   
              ?>
    

<div class="card">
<div class="col-4">

    <a href="review_log.php?id=<?php echo $row['filmID']; ?>" >
    <div class="img1" ><span class="image fit"><img src="<?php echo $row['img']; ?>" alt="" /></span></div>

    <div class="title"><?php echo $row['title']; ?>
          <br> <p><?php echo $row['date']; ?></p>
          </div>
    <div class="text"><?php echo $row['plot']; ?></div>
    <a href="genre_log.php"><div class="catagory">Movie<i        class="fas fa-film"></i></div></a>
    <a href="#"><div class="views"><?php echo round($rate, 1);?><i class="fas fa-star" style="color: #f5b50a;"></i> </div></a>
  </a>
</div>
</div>

    <?php
                }
              }else{
                echo "no data";
            }
        ?>  
  

</div>
       

</div>
    

    
</div>        
	</body>
<script>
function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('card');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
</script>
    		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</html>