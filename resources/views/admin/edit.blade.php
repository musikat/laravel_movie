@include('admin.head')
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

<?php
  /* include('session.php');
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
                            /*
                            if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }*/
                            ?>
							
						</ul>
					</nav>

          <?php
              
            /*  $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['title']) && isset($_POST['director']) && isset($_POST['date']) && isset($_POST['cast']) && isset($_POST['plot']) ) {
                  if (!empty($_POST['title']) && !empty($_POST['director']) && !empty($_POST['date']) && !empty($_POST['cast']) && !empty($_POST['plot']) ) {
                     
                    $data['id'] = $id;
                    $data['title'] = $_POST['title'];
                    $data['director'] = $_POST['director'];
                    $data['genre'] = $_POST['genre'];
                    $data['date'] = $_POST['date'];
                    $data['cast'] = $_POST['cast'];
                    $data['plot'] = $_POST['plot'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'admin_film.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'admin_film.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
              }*/
          ?>
    
<section id="one" class="spotlights">
<section>
    <div class="container">
            <div class="box">  
            <span class="image left"><img src="<?php //echo $row['img']; ?>"alt="">

              <ul class="actions small">
<input class="form-control" type="file" name="uploadfile" id="uploadfile" value="<?php //echo $row['img']; ?>" />

            </ul>
            </span> 
                      
                <div class="inner">

                    
<form action="" method="post">
<div class="row gtr-uniform">
   
    <h3>Title</h3>
    <div class="col-4 col-12-xsmall">
        <input type="text" name="title" id="title" value="<?php //echo $row['title']; ?>" placeholder="Title">
    </div>
    <h3>Direcator</h3>
    
    <div class="col-4 col-12-xsmall">
        <input type="text" name="director" id="director" value="<?php //echo $row['director']; ?>" placeholder="Director">
    </div>
     
    <h3>Release</h3>
    <div class="col-2 col-12-xsmall">
        <input type="text" name="date" id="date" value="<?php //echo $row['date']; ?>" placeholder="Date">
    </div>
 
    <!-- Break -->
    <div class="col-12">
        <select name="genre" id="genre">
            <?php 
            /*
            if($row['genre']==1){
                echo '<option selected="selected" value="1">Action</option>';
            }elseif($row['genre']==2){
                echo '<option selected="selected" value="2">Adventure</option>';
            }elseif($row['genre']==3){
                echo '<option selected="selected" value="3">Comedy</option>';
            }elseif($row['genre']==4){
                echo '<option selected="selected" value="4">Drama</option>';
            }elseif($row['genre']==5){
                echo '<option selected="selected" value="5">Fantacy</option>';
            }elseif($row['genre']==6){
                echo '<option selected="selected" value="6">Horror</option>';
            }elseif($row['genre']==7){
                echo '<option selected="selected" value="7">Romance</option>';
            }elseif($row['genre']==8){
                echo '<option selected="selected" value="8">Sci-Fi</option>';
            }else echo '<option value="">- Genre -</option>';
            */
            ?> 
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
        <input type="text" name="cast" id="cast" value="<?php //echo $row['cast']; ?>" placeholder="Comma brake">
    </div>
        
    <!-- Break -->
    <h3>Plot</h3>
<div class="col-12">
       <input type="text" name="plot" id="plot" placeholder="Plot Line" value="<?php //echo $row['plot']; ?>">
</div>
    
    
    <div class="col-12">
        <ul class="actions">
            <button  type="submit" value="Update" name="update" class="primary">Update</button>
            <li><a href="admin_delete.php?id=<?php //echo $row['filmID']; ?>" class="button">Delete</a></li>
            <li><a href="{{url('admin/film')}}" class="button">Cancel</a></li>
        </ul>
    </div>
</div>
</form>                

                    
                </div>
                 

    </div>
</div>
</section>
</section>
       


</div>

@include('admin.script')
             
	</body>
</html>