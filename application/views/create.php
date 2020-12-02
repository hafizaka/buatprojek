<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH DATA</title>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap.css");?>">
</head>
<body>
    <div class="container">
    <?php echo form_open('welcome/save',['class'=>'form-horizontal']); ?>
  <div class="form-group">
    <label for="inputName">NAMA</label>
    <?php echo form_input(["name"=>"nama","placeholder"=>"nama","class"=>"form-control"]); ?>
    <div>
      <?php echo form_error('nama','<div class="text-danger">','</div>'); ?>
  </div>
  </div>
  <div class="form-group">
    <label for="inputNIM">NIM</label>
    <?php echo form_input(["name"=>"nim","placeholder"=>"nim","class"=>"form-control"]); ?>
    <div>
  <?php echo form_error('nim','<div class="text-danger">','</div>'); ?>
  </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">EMAIL</label>
    <?php echo form_input(["name"=>"email","placeholder"=>"email","class"=>"form-control"]); ?>
    <div>
  <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
  </div>
  </div>
  <?php echo form_submit(["name"=>"submit","value"=>"submit","class"=>"btn btn-primary"]); ?>
  <?php echo form_close(); ?>
    </div>
</body>
</html>