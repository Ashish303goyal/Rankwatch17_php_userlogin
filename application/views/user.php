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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>index.php/welcome/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
 <div class="">     
<h2 class="text-center">USERS FOR LOGIN ACCESS</h2> 
  <table class="table table-striped ">
    <thead>
      <tr>
	   <th>Profile Image</th>
        <th>User Name</th>
		<th>Email</th>
        <th>Gender</th>
		<th>Age</th>
		<th>Mob No</th>
		<th>Address</th>
		<th>Country</th>
		<th>State</th>
		
      </tr>
    </thead>
    <tbody>    
	<?php
$pieces = explode(".", $data12[0]->image);?>    
			<tr>
		<td><div class="col-md-3 col-sm-3 col-xs-3">
        <img src="<?php echo base_url();?>profile/<?php echo $pieces[0].'_thumb.'.$pieces[1];?>" class="img-responsive">
        </div></td>
        <td><?php echo $data12[0] -> name;?></td>
        <td><?php echo $data12[0] -> email;?></td>
<td><?php echo $data12[0] -> gender;?></td>
<td><?php echo $data12[0] -> age;?></td>
<td><?php echo $data12[0] -> mob;?></td>
<td><?php echo $data12[0] -> address;?></td>
<td><?php echo $data12['country'];?></td>
<td><?php echo $data12['state'];?></td>		</tr>
	  <?php ?>
    </tbody>
  </table>
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
