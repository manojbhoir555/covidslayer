<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/form.css" type="text/css">


<div class="body-content">
<div class="alert alert-error"><?php echo $this->session->flashdata('error');?></div>
	<?php $user=$this->input->cookie('remember_me_u',true); $pass=$this->input->cookie('remember_me_pass',true);
	  
	?>
  <div class="module">
      <div align="right"><a href="<?php echo base_url();?>" style="text-decoration:none; color : #fff;">Login</a> | <a href="<?php echo base_url();?>index/register" style="text-decoration:none; color : #fff;">Register</a></div>
    <h1>Sign In</h1>
    <form class="form" id="signin" name="signin"  action="<?php echo base_url();?>index/login" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>    
      <input type="email" placeholder="Email" name="email"  value="<?=$user?>" required />
      <input type="password" placeholder="Password" name="password" id="password"  value="<?=$pass?>" required />
	  
	  <input type="checkbox" placeholder="Password" name="remember_me" id="remember_me"> Remember Me</input>
     
      
	  
      <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
	 
    </form>
	
  </div>
</div>