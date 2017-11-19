<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">PROJECT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li class="active"><a href="<?php echo base_url();?>index.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center ">    
  <div class="row content">
    <div class=" text-left"> 
<div class="container">
    <h1 class="well  text-center">LOGIN</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form class="form" action="<?php echo base_url();?>index.php/Welcome/login1" method="post" id="myform">
					<div class="col-sm-12">	
					<div class="row">
							<div class="col-sm-12 form-group">
								<label for="sel1">Role</label>
							  <select class="form-control" id="sel1" name="role">
							    <option value="admin">Admin</option>
								<option value="user">User</option>
							  </select>
							</div>	</div>						
					<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="text" placeholder="Enter Email Here.." name="email" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password Here.." name="pass" class="form-control" required>
							</div>
						</div>	
					<button type="submit" class="btn btn-lg btn-info col-lg-12">Login</button>&nbsp;
					</form> 				
					</div>
				
				</div>
	</div>
	</div>
	  
    </div>
  </div>
</div>

<section class="footer">
    <div class="container">
    	<div class="row">
        	<div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Services</h4>
                	<ul>
                    	<li class="line_rv"><a href="canon-printer-support.php">........</a></li>
               
                        <li><a href="hp-printer-support.php">........</a></li>
                     
                     
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>ABOUT</h4>
                	<ul>
                    	<li><a href="tosiba-printer-support.php">.................</a></li>
                        <li><a href="panasonic-printer-support.php">.............</a></li>
                      
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Contact us</h4>
                	<p>...................</p>
      			<p>....................<br>

				
                </p></div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
