@include('admin.head')

<style>
   /*Slide*/
.slider{
  position: absolute;
  height: 780px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 300%;
  height: 800px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 10%;
  transition: 2s;
}

.slide img{
  width: 100%;
  height: 100%;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}



/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

/*End of Slide*/ 
    
    </style>
	<body class="is-preload">

    <?php
 /*
 include('session.php');
    include('model.php');
    $cid = $_SESSION['login_user']; 
    date_default_timezone_set('Asia/Manila');
    $d = date("Y-m-d");
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
					<section id="banner" class="major">
                        
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="{{ asset('images/genre/action/3.jpg') }}" alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/adventure/1.jpg') }}" alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/comedy/3.jpg') }}" alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/horror/1.jpg') }}" alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/romance/3.jpg') }}" alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/fantacy/1.jpg') }}" alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/scifi/1.jpg') }}"alt="">
          
        </div>
        <div class="slide">
          <img src="{{ asset('images/genre/drama/2.jpg') }}" alt="">
          
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>

        </div>
        <!--automatic navigation end-->
      </div>

    </div>
    <!--image slider end-->
                        
						<div class="inner">
                            
							<header class="major">
								<h1> Welcome to Moviefy! </h1>
							</header>
							<div class="content">
								<span></span><p>Dive into the world of cinema with Moviefy, your go-to destination for the latest movie critiques, insightful analyses, and a cinematic journey like no other. Whether you're a seasoned cinephile or just looking for a great film to unwind with, you're in the right place!
                                </p>
                                <p>
                                    Get ready to embark on a cinematic journey like never before. Lights, camera, action – let the reviews roll at Moviefy! 🌟🎥
                                </p>

								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
                         
						</div> 
					</section>

				<!-- Main -->
					<div id="main">


						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/action/1.jpg') }}" alt="Action" />
                    
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Action</a> <!-- 1 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/comedy/1.jpg') }}"  alt="Comedy" />
                     
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Comedy</a> <!-- 3 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/adventure/2.jpg') }}" alt="Adventure" />
                     
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Adventure</a> <!-- 2 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/horror/2.jpg') }}" alt="Horror" />
                    
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Horror</a> <!-- 6 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/drama/2.jpg') }}" alt="Drama" />
                    
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Drama</a> <!-- 4 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/romance/2.jpg') }}" alt="Romance" />
                    
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Romance</a> <!-- 7 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/scifi/1.jpg') }}" alt="Scifi" />
                    
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Scifi</a> <!-- 8 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('images/genre/fantacy/2.jpg') }}" alt="Fantacy" />
                    
									</span>
									<header class="major">
                  <h3><a href="{{url('user/genre')}}" class="link">Fantacy</a> <!-- 5 -->
                                        </h3>

									</header>
								</article>
							</section>

					</div>

			</div>

		<!-- Scripts -->
    <script type="text/javascript">
//slide
      var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 3000);
    </script>

@include('admin.script')

	</body>
</html>