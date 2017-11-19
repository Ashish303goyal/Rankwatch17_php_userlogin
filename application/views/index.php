
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">
function Validate() {
        var password = document.getElementById("pass1").value;
		if(password.length < 8){
		alert("Enter a password longer than 8 characters");
		return false;
		}
        var confirmPassword = document.getElementById("pass2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
  </script>
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
	  <li><a href="<?php echo base_url();?>index.php/welcome/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center ">    
  <div class="row content">
    <div class=" text-left"> 
<div class="container">
    <h1 class="well  text-center">REGISTRATION</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<?php echo form_open_multipart('welcome/register');?>
					<div class="col-sm-12">						
					<div class="row">
					<div class="col-sm-6 form-group">
								<label>Name</label>
								<input type="text" placeholder="Enter Name Here.." name="name" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Email Here.." data-error="Bruh, that email address is invalid" required>
							<div class="help-block with-errors"></div>
							</div></div>
							<div class="row">
							<div class="col-sm-6 form-group">
								<label>Mob No</label>
								<input type="number" placeholder="Enter Mob No Here.." name="mob" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Age</label>
								<input type="number" placeholder="Enter Age Here.." name="age" class="form-control" required>
							</div>
							</div>
							<div class="row">
							<div class="col-sm-6 form-group">
							<label>Gender</label>
							 <select class="form-control" id="gender" name="gender">
							    <option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							  </select>
							
							
						
							<label>Profile Picture</label>
						<input type='file' name='image' size='20' />
					
						
						<label style="color:red;">
						<?php
						if(!empty($error))
						{
						foreach($error as $row)
						{
							echo $row;
						}
						}
						?></label></div>
							<div class="col-sm-6 form-group">
								<label>Address</label>
								  <textarea class="form-control" rows="5" placeholder="Enter Address Here.." name="address" required></textarea>
							</div>
							</div>
							<div class="row">
							<?php $attributes = array("name" => "form1");
							echo form_open("Welcome/index", $attributes);?>
							<div class="col-sm-6 form-group">
							<label>Country</label>
							<?php $attributes = 'id="country" class="form-control"';
							echo form_dropdown('country', $country, set_value('country'), $attributes); ?>
							</div>
							<div class="col-sm-6 form-group">
							<label>State</label>
							<?php $attributes = 'id="state" class="form-control"';
							echo form_dropdown('state', $state, set_value('state'), $attributes); ?>
							</div></div>
							<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password Here.." name="pass1" id="pass1" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Confirm Password</label>
								<input type="password" placeholder="Enter Password Here.." name="pass2" id="pass2" class="form-control" required>
							</div>
						</div>	
						
						
					<button type="submit" onclick="return Validate()" class="btn btn-lg btn-info col-lg-12">Register</button>&nbsp;
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
<script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>" type="text/javascript"></script>
<script type="text/javascript">
$('#country').change(function(){
    var country_id = $(this).val();
    $("#state > option").remove();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('Welcome/populate_state'); ?>",
        data: {id: country_id},
        dataType: 'json',
        success:function(data){
            $.each(data,function(k, v){
                var opt = $('<option />');
                opt.val(k);
                opt.text(v);
                $('#state').append(opt);
            });
            $('#city').html('<option value="0">Select City</option>');
            //$('#state').append('<option value="' + id + '">' + name + '</option>');
        }
    });
});
</script>
</body>
</html>
