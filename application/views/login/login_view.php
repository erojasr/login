
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.css"/>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">


    <?php echo form_open('login',array('method' => 'POST','class' => 'form-horizontal')); ?>

        <h2 class="form-signin-heading">Please sing in</h2>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <?php echo form_input(array('name'=> 'email', 'type' => 'email', 'id' => 'email' ,'class' => 'form-control','autofocus' => 'autofocus')); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <?php echo form_password(array('name'=> 'password', 'type' => 'password', 'id' => 'password' ,'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php echo form_submit(array('type' => 'submit', 'value' => 'Sing in', 'class' => 'btn btn-primary btn-block')); ?>
            </div>
        </div>

        <?php if(validation_errors()): ?>
        <div class="form-group">
            <div class="alert alert-error span4"><?php echo validation_errors(); ?></div>
        </div>
        <?php endif; ?>


    <?php echo form_close(); ?>

</div> <!-- /container -->

<script src="<?php echo bower_url(); ?>bootstrap/dist/js/boostrap.js"></script>

</body>
</html>
