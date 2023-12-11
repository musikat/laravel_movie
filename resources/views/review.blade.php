<!DOCTYPE HTML>

<html>
	<head>
		<title>Moviefy - HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/fontawesome.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/review.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<style>
    
    .container {
  display: flex;
  align-items: center;
  justify-content: center
}

img {
  max-width: 100%;
  max-height:100%;
}

.text {
  font-size: 20px;
  padding-left: 20px;
}  
    </style>   
    
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
<section id="one" class="split spotlights">

    <div class="container">
                <div class="box">  
  

    
          <?php
            //error_reporting(0);
           /*   include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){
                  
    */
          ?>
        
                    
                <span class="image left"><img src="<?php //echo $row['img']; ?>"alt="">
                  <h3>Genre</h3> 
                    <hr>
                    <p>

            <?php /*
            if($row['genre']==1){
                echo 'Action';
            }elseif($row['genre']==2){
                echo 'Adventure';
            }elseif($row['genre']==3){
                echo 'Comedy';
            }elseif($row['genre']==4){
                echo 'Drama';
            }elseif($row['genre']==5){
                echo 'Fantacy';
            }elseif($row['genre']==6){
                echo 'Horror';
            }elseif($row['genre']==7){
                echo 'Romance';
            }elseif($row['genre']==8){
                echo 'Sci-Fi';
            }
                 */       
            ?>

                    </p>
                    <hr>
                </span> 
                    
                    
                <div class="inner">
                    <h3><?php //echo $row['title']; ?></h3>
                    <hr>
                  <p><?php //echo $row['date']; ?></p>
                  <h5 >Director</h5>
                  <p ><?php //echo $row['director']; ?></p>
                    <hr>
                  <h5 >Top Casts</h5>
                  <p ><?php //echo $row['cast']; ?>
                  </p>
                    <hr>
                  <h5 >Plot Description</h5>
                  <p ><?php //echo $row['plot']; ?></p>
                </div>
                 
              <?php
           /* }else{
            echo "no data";
          }
           
        

            */
          ?>
                    
                    
                   
<form action="" method="post">        
<div class="col-12">
    <h3>Rating</h3>
<?php /*
    $row1 = $model->fetch_ave($id);
      if(!empty($row1)){
      $rate=$row1['avg(rating)'];
      }
    */
    ?>    
    <p><?php //echo round($rate, 1);?></p>
    <div class="col-4 col-12-xsmall">
    <input type="text" name="rate" id="rate" value="" placeholder="Rating" pattern="[1-5]">
    </div>
<textarea name="review" id="review" placeholder="Leave a review..." rows="6"></textarea>
            
            <div class="col-12">
              
<ul class="actions">

    <?php
 /*
    
   

     if($userid==' '){
         echo '<li><span class="button primary disabled">Submit</span></li>';
     }else{
        echo '<li><a href="login.php" class="button primary">Login</a></li>';
    }
    */
?>
  
    
</ul>
            </div>
        </div>
</form>                  
                    
    </div>
</div>


       
<div class="box">  
  <section >
      <h2>User Reviews</h2>  
      
<?php
 /*
                
                $rows = $model->fetch_rev($id);
                $i = 1;
      
                if(!empty($rows)){
                  foreach($rows as $row){
                    
                    */
?>
      <div class="box"> 
        <h5 ><?php //echo $row['rating']; ?>/5</h5>
<blockquote><?php //echo $row['review']; ?></blockquote>
<span><h5 >Reviewed by:</h5>
<h6 ><?php //echo $row['username']; ?></h6></span>
                
       </div>
      
        <?php
          /*  }
          }else{
            echo "no data";
        }
        */
        ?>
      

    
      

    </section>              
</div>              
	

</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>