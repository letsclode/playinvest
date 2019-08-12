<div class="d-flex justify-content-center card login-card">
<h2 class="text-center card-title"><?php echo $title; ?></h2>
	<?php echo form_open('users/login'); ?>
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter Username" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>	
	<?php echo form_close(); ?>
</div>
