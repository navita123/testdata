<html>
<head>
<title>View Page</title>
<link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<style>
.btn {
    font-size: 16px;
}
label.error {
    width: 100%;
    color: red;
    font-style: italic;
}
input.error {
    border: 1px solid red;
}
textarea.error {
    border: 1px solid red;
}
</style>
</head>
<body>
<?php
$data=array();
if(!empty($selectedData)){
foreach ($selectedData as $value) {
  $data[]=$value;
}
}
//print_r($data);
  ?>
  <!--https://jqueryvalidation.org/-->
<script type="text/javascript" src="<?php echo base_url();?>Assets/JS/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Assets/JS/jquery.validate.js"></script>
<script>
$(document).ready(function() {
    $("#userForm").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
				minlength:10,
				maxlength:12
            },
            textarea1: "required",
			citycode:{
                required: true,
                number: true
            },
			password:"required"
        },
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            mobile: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
   			 textarea1: "Please enter your message",
			 citycode: "Please choose your citycode",
			password: "Please enter your password",
        }
		
    });
});
</script>
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel primary</h3>
  </div>
  <div class="panel-body">
  <form class="form-horizontal" method="post" action="<?php echo base_url().'User/insertData';?>" id="userForm" >
   <input type="hidden" name="id" value="<?php if(!empty($data[0]->id)){echo $data[0]->id; }?>">
  <fieldset style=" width: 50%;">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" name="email"  class="form-control" id="inputEmail" placeholder="Email" value="<?php if(!empty($data[0]->email)){echo $data[0]->email; }?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" value="<?php if(!empty($data[0]->password)){echo $data[0]->password; }?>">
        
      </div>
    </div>
	<div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Mobile</label>
      <div class="col-lg-10">
        <input type="text" name="mobile" class="form-control" placeholder="mobile" value="<?php if(!empty($data[0]->mobile)){echo $data[0]->mobile; }?>">
        
      </div>
    </div>
	
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="textarea1" rows="3" id="textArea"> <?php if(!empty($data[0]->textarea1)){echo $data[0]->textarea1; }?></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
   
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="citycode" >
		<option></option>
          <option value="1" <?php //if(!empty($data[0]->citycode == '1')){echo "selected";}?>>1</option>
          <option value="2" <?php //if(!empty($data[0]->citycode == '2')){echo "selected";}?>>2</option>
          <option value="3" <?php //if(!empty($data[0]->citycode == '3')){echo "selected";}?>>3</option>
          <option value="4" <?php //if(!empty($data[0]->citycode == '4')){echo "selected";}?>>4</option>
          <option value="5" <?php //if(!empty($data[0]->citycode == '5')){echo "selected";}?>>5</option>
        </select>
        <br>
        
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="update" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>
</div>
</div>
</body>
</html>