@include('admin.head')

<body class="is-preload">
        
        <?php
           /*include('session.php');
            include('admin_config.php');
            $cid = $_SESSION['login_user']; 
                
                if($cid!='admin#'){
                    echo "<script>window.location.href = 'logout.php';</script>";
                }
            date_default_timezone_set('Asia/Manila');
            $d = date("Y-m-d");*/
            ?>
                <!-- Wrapper -->
        <div id="wrapper">
        
                        <!-- Header -->
                            <header id="header" class="alt">
                                <a href="{{url('admin/user')}}" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
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
                                    }
                                    */
                                    ?>
                                    
                                </ul>
                            </nav>

<div id="main" class="alt">
    
<section id="one">
    
    <div class="inner">
    <header class="major">
            <ul class="actions">
            <li><a href="{{url('admin/user')}}" class="button primary">User List</a></li>
            <li><a href="{{url('admin/film')}}" class="button ">Film List</a></li>
            <li><a href="{{url('admin/review')}}" class="button ">User Reviews</a></li>
            </ul>
    </header>
        <hr>
    <h2>Users</h2>
				
    
<div class="table-wrapper">
        <div class="custom-search">
            <input class="form-control cutsom-input" type="search" placeholder="Search" data-table="table1" value=''> 
        </div> 

    <table class="table table-striped table1" id="sortable">
        <thead>
            <tr>
                <th onclick="sortBy(0)" style="cursor:pointer">User ID</th>
                <th onclick="sortBy(1)" style="cursor:pointer">Username</th>
                <th onclick="sortBy(2)" style="cursor:pointer">Email</th>
                <th onclick="sortBy(3)" style="cursor:pointer">Birthday</th>
                <th onclick="sortBy(4)" style="cursor:pointer">Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
 /*
                
                $model = new Model();
                $table= 'user';
                $rows = $model->fetch($table);
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
                      if($row['userid']!=1){
                       
                     */     
              ?>
            <tr>
                <td ><?php // echo $row['userid']; ?></td>
                <td ><?php // echo $row['username']; ?></td>
                <td ><?php // echo $row['email']; ?></td>
                <td ><?php // echo $row['bday']; ?></td>
                <td ><?php // echo $row['gender']; ?></td>
                
            </tr>
            <?php
             /*   }
                  }
              }else{
                echo "no data";
            }*/
              ?>
        </tbody>

    </table>
    
                    
        </div>
    </div>
    </section> 
</div>

    
    
							
</div>



		<!-- Scripts -->
        
<script>

cPrev = -1; 
           
function sortBy(c) {
    rows = document.getElementById("sortable").rows.length;
    columns = document.getElementById("sortable").rows[0].cells.length;
    arrTable = [...Array(rows)].map(e => Array(columns)); 

    for (ro=0; ro<rows; ro++) {
        for (co=0; co<columns; co++) { 
           
            arrTable[ro][co] = document.getElementById("sortable").rows[ro].cells[co].innerHTML;
        }
    }

    th = arrTable.shift();
    
    if (c !== cPrev) { 
        arrTable.sort(
            function (a, b) {
                if (a[c] === b[c]) {
                    return 0;
                } else {
                    return (a[c] < b[c]) ? -1 : 1;
                }
            }
        );
    } else { 
        arrTable.reverse();
    }
    
    cPrev = c; 

    arrTable.unshift(th); 

    for (ro=0; ro<rows; ro++) {
        for (co=0; co<columns; co++) {
            document.getElementById("sortable").rows[ro].cells[co].innerHTML = arrTable[ro][co];
        }
    }
}

</script>

            <script src="{{ asset('assets/js/search.js') }}"></script>
            @include('admin.script')

	</body>
</html>