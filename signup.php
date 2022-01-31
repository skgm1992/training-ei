<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/style.css">
</head>
<body>
    <h2><center>Sign up page-<?php echo $title;?></center></h2>
    <div class="container col-md-6" >
    <div class="login-dark">
        <form method="post">
            
            <div class="form-group"><input class="em" class="form-control" type="email" name="email" placeholder="Email" ></div>
            <div class="form-group"><input class="pw" class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="lg"class="btn btn-primary " type="submit">Sign up</button></div>
            <!-- <a href="#"  class="fgp"class="forgot">Forgot your email or password?</a></form> -->
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>