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
    <link rel="stylesheet" href="css/style.css">
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

.sidebar
{
     width:395px;
     height: 510px;
     border-top:1px solid black;
     border-right: 1px solid black;
     border-left:1px solid black;
     border-bottom:5px solid blue;
     float:left;
     margin-top:20px;
     padding:50px;
     box-shadow: 2px 2px 2px 2px gray;



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
              <a href="index.php">Employee</a>
              <a href="address.php">Address</a>
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





    <section id="main" style="margin-top:100px;">

      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-8">
            <div class="sidebar">
            <div class="form-group">
              <form action="table.php" method="POST">
                  <label>Address Entry</label><br><br>
                    <input type="text" name="pl" class="form-control" placeholder="Street Name" value=""><br>
										<input type="text" name="pt" class="form-control" placeholder="Street No" value=""><br>
                    <input type="text" name="pt" class="form-control" placeholder="Zip Code" value=""><br>
                    <center><input type="submit" class="btn btn-info" name="s1" value="Submit"></center><br>
              </form>
            </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>

        <!--<div class="row">
         <div class="col-md-5">
            <div class="form-group">
              <form action="table.php" method="POST">
              <label>Query 2</label>
              <input type="text" name="dn" class="form-control" placeholder="Department Name" value=""><br>
                    <input type="text" name="pn" class="form-control" placeholder="Project Name" value=""><br>
              <input type="text" name="pl" class="form-control" placeholder="Project Location" value=""><br>
                    <input type="text" name="wt" class="form-control" placeholder="Work Time (hr)" value=""><br>
             <input type="submit" class="btn btn-info" name="s2" value="Submit"><br>
            </form>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <form action="table.php" method="POST">
            <label>Query 3</label>
            <input type="text" name="pn" class="form-control" placeholder="Project Name" value=""><br>
            <input type="text" name="pl" class="form-control" placeholder="Ignore Project Location" value=""><br>
            <input type="submit" class="btn btn-info" name="s3" value="Submit"><br>
            </form>
            </div>
            </div>
            </div>
           <div class="row">
          <div class="col-md-5">
          <div class="form-group">
              <form action="table.php" method="POST">
      <label>Query 4</label>
      <input type="text" name="pn" class="form-control" placeholder="Project Name" value=""><br>
        <input type="text" name="pl" class="form-control" placeholder="Project Location" value=""><br>
        <input type="submit" class="btn btn-info" name="s4" value="Submit"><br>
        </form>
          </div>
          </div>
      </div>
       <div class="row">
    <div class="col-md-5">
        <div class="form-group">
     <form action="table.php" method="POST">
     <label>Query 5</label><br>
    <input type="submit" class="btn btn-info" name="s5" value="Show List"><br>
    </form>
    </div>
    </div>
    </div>

    </div>



	</div>-->


       </section>

       <footer class="foot">
            <center><p>Copyright &copy;2017<br>Developed By Nafiya Ahmed</p></center>
        </footer>


</body>

</html>
