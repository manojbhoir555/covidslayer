<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/form.css" type="text/css">


<div class="body-content">
<div class="alert alert-error"><?php echo $this->session->flashdata('error');?></div>

  <div class="module">
  <div align="right"><a href="<?php echo base_url();?>" style="text-decoration:none; color : #fff;">Login</a> | <a href="<?php echo base_url();?>index/register" style="text-decoration:none; color : #fff;">Register</a></div>
    <h1>Create an account</h1>
    <form class="form" id="register" name="register" id="register" action="<?php echo base_url();?>index/register" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" id="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confirmpassword.pattern = this.value;" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword"  id="confirnpassword"  pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
	  
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
	 
    </form>
  </div>
</div>