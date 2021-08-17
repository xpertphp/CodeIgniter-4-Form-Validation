<!DOCTYPE html>
<html>
<head>
  <title>CodeIgniter 4 jQuery Form Validation Example Tutorial - XpertPhp</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>
<body>
 <div class="container">
	<div class="row">
		<div class="col-md-9">
			<h2>Add Student</h2>
		</div>
	</div>
    <div class="row">
      <div class="col-md-9">
        <form method="post" name="frmAddStudent" id="frmAddStudent" action="<?php echo site_url('student/store');?>">
          <div class="form-group">
            <label for="txtFname">First Name</label>
			<input type="text" name="txtFname" class="form-control" id="txtFname" placeholder="Please enter first name" />
			<?php if (\Config\Services::validation()->hasError('txtFname'))
			{
				echo $validation->getError('txtFname');
			}?>
          </div> 
		   <div class="form-group">
            <label for="txtLname">Last Name</label>
			<input type="text" name="txtLname" class="form-control" id="txtLname" placeholder="Please enter last name" />
			<?php if (\Config\Services::validation()->hasError('txtLname'))
			{
				echo \Config\Services::validation()->getError('txtLname');
			}?>
          </div> 
          <div class="form-group">
            <label for="txtEmail">Email</label>
			<input type="text" name="txtEmail" class="form-control" id="txtEmail" placeholder="Please enter email" />
			<?php if (\Config\Services::validation()->hasError('txtEmail'))
			{
				echo $validation->getError('txtEmail');
			}?>
          </div>
		<div class="form-group">
            <label for="txtMobile">Mobile</label>
			<input type="text" name="txtMobile" class="form-control" id="txtMobile" placeholder="Please enter mobile number." />
			<?php if (\Config\Services::validation()->hasError('txtMobile'))
			{
				echo $validation->getError('txtMobile');
			}?>
          </div>		  
          <div class="form-group">
            <label for="txtAddress">Address</label>
			<textarea name="txtAddress" class="form-control"></textarea>
			<?php if (\Config\Services::validation()->hasError('txtAddress'))
			{
				echo $validation->getError('txtAddress');
			}?>
          </div>
          <div class="form-group">
		   <input type="submit" value="Add" name="btnadd" class="btn btn-success" />
          </div>
        </form>
      </div>
    </div>
</div>
</body>
</html>