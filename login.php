<?php $msg=''; ?>
<?php include 'header.php'; ?>
<?php include 'top-nav.php'; ?>
<?php include 'loginresult.php'; ?>

<style type="text/css">
	
	#msg{
		position: absolute;
		top:160px;
		left:365px;
		z-index: 1; 
		text-transform: capitalize;
	}
</style>

<?php echo $msg;?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<?php include 'leftnav.php'; ?>
		</div>
		
		<div class="col-md-9">
		<h1>Login</h1>
		<div class="container">
			<div class="row">
				<form id="loginform" action="" method="POST" class="col-md-6">
				  <div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="username">Username</label>
								</div>
							</div>
							<div class ="col-md-6">
								<div class="form-group">
									<input id="username" type="text" tabindex="1" name="username" placeholder="Enter Your Username" class="form-control" required="" autofocus /> 
								</div>
							</div>
						</div>
				  <div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="password">Password</label>
								</div>
							</div>
							<div class ="col-md-6">
								<div class="form-group">
									<input id="password" type="password" tabindex="2" name="password" placeholder="Enter Password" class="form-control" required=""  />
								</div>
							</div>
						</div>
				  <div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="submit" name="submit" value="Login" tabindex="6" class ="btn btn-primary">
									<p class="mt-2">
					Not registered yet ?
					<input type="button" class=" rounded mt-2" onclick="location.href='registration.php'" value="Register now"/>
				</p>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
		</div>
		</div>
</div>

<?php include 'footer.php'; ?>