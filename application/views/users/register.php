
<?php echo validation_errors(); ?>
<div class="d-flex justify-content-center card login-card">
            <?php echo form_open('users/register');?>
            <h2 class = "text-center card-title"><?=$title;?></h2>
                <div class = 'form-group'>
                    <label>Name</label>
                    <input type="text" name = 'name' class = "form-control" placeholder="Name">
                </div>

                <div class = 'form-group'>
                    <label>Email</label>
                    <input type="text" name = 'email' class = "form-control" placeholder="Email">
                </div>

                <div class = 'form-group'>
                    <label>Password</label>
                    <input type="text" name = 'password' class = "form-control" placeholder="Password">
                </div>

                <div class = 'form-group'>
                    <label>Confirm Password</label>
                    <input type="text" name = 'password2' class = "form-control" placeholder="Confirm Password">
                </div>

                <button type = "submit" class = "btn btn-primary">Submit</button>
            <?php echo form_close()?>
</div>
