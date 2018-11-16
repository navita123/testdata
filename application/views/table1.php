<link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<div class="row">
<div class="col-sm-1 col-md-1" style="border:1px solid #ccc;">ID</div>
<div class="col-sm-2 col-md-2" style="border:1px solid #ccc;">Email</div>
<div class="col-sm-1 col-md-1" style="border:1px solid #ccc;">Password</div>
<div class="col-sm-1 col-md-1" style="border:1px solid #ccc;">Message</div>
<div class="col-sm-1 col-md-1" style="border:1px solid #ccc;">city code</div>
<div class="col-sm-1 col-md-1" style="border:1px solid #ccc;">mobile</div>
<div class="col-sm-2 col-md-2"  style="border:1px solid #ccc;">Action</div>
</div>
</div>
<?php
if(!empty($Rdata)){
foreach ($Rdata as $value) {
	?>
	<div class="row">

	<div class="col-sm-1 col-md-1"><?php echo $value->id; ?></div>
	<div class="col-sm-2 col-md-2"><?php echo $value->email; ?></div>
	<div class="col-sm-1 col-md-1"><?php echo $value->password; ?></div>
	<div class="col-sm-1 col-md-1"><?php echo $value->textarea1; ?></div>
	<div class="col-sm-1 col-md-1"><?php echo $value->citycode; ?></div>
	<div class="col-sm-1 col-md-1"><?php echo $value->mobile; ?></div>
	<div class="col-sm-2 col-md-2"><a href="<?php echo 'modify/'.$value->id; ?>">edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo 'delete/'.$value->id; ?>">Delete</a></div>
		<div style="border-bottom:1px solid #FFFF99"></div>
	</div>
	<?php
}

}
?>
