<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="row ">
					<div class="col-md-8 mt-5 shadow">
						<h1 class="mt-3 mb-0">Login form</h1>
						
					 <?php echo form_open('Welcome/check',['class'=>'card']);?>
						<div class="m-3">
						  <label for="exampleFormControlInput1" class="form-label">First Name</label>
						  <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'First name','value'=>set_value('username')]);?>
						  <div class="text-danger"><?php echo form_error('username');?></div>
						</div>	
						<div class="m-3">
						  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
						  <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password'])?>
						<div class="text-danger"><?php echo form_error('password');?></div>
						</div>	
						<div class="m-3">

						<?php echo form_submit(['name'=>'submit','class'=>'btn btn-success','value'=>"submit"]),
						form_submit(['name'=>'reset','class'=>'btn btn-success','value'=>"Reset"]);?>
						  
						  
						</div>
												
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>