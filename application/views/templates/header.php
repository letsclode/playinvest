<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
    <a href="<?php echo base_url(); ?>" class="navbar-brand"><img class= "header-logo" src="<?php echo base_url();?>assets/images/header/logo.png" alt="PlayInvest Logo"></a></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li >
                <a href=" <?php echo base_url(); ?>" class="nav-link">Home</a>
            </li>
            <?php if(!$this->session->userdata('logged_in')): ?>
                <li >
                        <a href="<?php echo base_url(); ?>users/login" class="nav-link">Login</a>
                </li>
                <li >
                    <a href=" <?php echo base_url(); ?>users/register" class="nav-link">SignUp</a>
                </li>
            <?php endif; ?>
            </ul>
        <?php if($this->session->userdata('logged_in')): ?>
            <ul class = "nav navbar-nav navbar-right">
                    <a href=" <?php echo base_url(); ?>users/logout" class="nav-link">Log Out</a>
                </li>
             </ul>
        <?php endif; ?>
    </div>  

    
</nav>

    <div class = "container">
        <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_failed').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_login')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_login').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_logout')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logout').'</p>'; ?>
        <?php endif; ?>


    
