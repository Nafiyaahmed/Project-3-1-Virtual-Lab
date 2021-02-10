<!DOCTYPE html>
<html>
<head>
	<title>Lab Project</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Button Generator</title>
    <style>
    .ruet
    {
        background-color:#008040;
        border-bottom: 6px solid #004f27;
        height:50px;
        width:100px;
        color:#ffffff;
        font-weight: bold;
        font-size:18px;      
        text-align:center;
        border-radius:5px;
        padding:10px 20px 10px 20px;


}
.ruet:hover
{
   
   background-color: #008040;
   border-bottom-width: 4px; 
   
  
}

a:link
{
  color:#ffffff;
  text-decoration:none;
  
} 

.ruet:active
{
    border-bottom-width:1px;
    background-color: #00a653;


} 

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(40,40,40);
    box-shadow: 5px 5px 5px grey;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: white;
    background-color: #3F51B5;  
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 30px;
    margin-left: 50px;
}



.nav
{
   border-radius: 0px;
   background-color: #3F51B5;
   border:none;
}

  .foot
  {
          background-color: rgb(40,40,40);
          padding: 20px;
          color: white;
          text-align: center;
          clear: left;
          max-width: 100%;
          margin-top:500px;
          


          
  }

  .bh
  {
      font-size:30px;
      cursor:pointer;
      color: white; 
      margin-left: 20px;
      padding:5px;

  }
  .ch
  {
     font-size: 25px; 
     margin-left:15px;
  }
  .bh:hover
  {
      background-color: black;
  }

  @media only screen and (max-width:400px)
  {
    .ch
    {
       font-size:20px;
       margin-left:2px;
    }
  }

</style>


</head>


<?php

require_once("config.php");

if(isset($_POST['s1']))
{
	$dn=$_POST['dn'];
	$pn=$_POST['pn'];
	$pl=$_POST['pl'];

	$query="SELECT employee.emp_name, dept.dept_name, project.project_name, project.project_location 
FROM employee, dept, project, ft_pt_work 
WHERE employee.emp_id=ft_pt_work.emp_id
AND dept.dept_id=ft_pt_work.dept_id
AND project.project_id=ft_pt_work.project_id
AND dept.dept_name='$dn'
AND project.project_name='$pn'
AND project.project_location='$pl';
";
    $send=mysqli_query($connection,$query);
  


}




?>

<body>

         <nav class="navbar navbar-inverse nav">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <span class="bh" onclick="openNav()">&#9776;</span>
                  <span class="ch"><a style="color: white;" href="index.html">Lab Project</a></span>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>-->
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                  </ul>
                </div>
              </div>
        </nav> 
           



            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="index.html">Lab 1</a>
              <a href="#">Lab 2</a>
              <a href="#">Lab 5</a>
            </div>

            
           <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
            </script>


        </header>
 <div class="container">
 <br><br>
<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-10">
<div class="table-responsive">
    <table class="table">

    <thead>
    <tr>
     <th>Employee Name</th>
     <th>Department Name</th>
     <th>Project Name</th>
     <th>Project Location</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['s1']))
    {
	    while($row=mysqli_fetch_array($send))
	    {
	       echo "<tr><td>$row[emp_name]</td><td>$row[dept_name]</td><td>$row[project_name]</td><td>$row[project_location]</td></tr>";
	    }
    }
      echo "</tbody>
	</table>
	</div>";

    ?>

    <div class="col-sm-1"></div>
</div>
</div>
</div>
</div>
</body>
</html>