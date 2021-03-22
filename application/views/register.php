<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>User Registration Form</title>
</head>
<body>
<div class="back">
    <div class="div-center">
            <div class="content">
                <div class="col-md-12 text-center">
                    <!-- <img class="" src="assets/images/avatar.png" style="width:100px; height:100px;"> -->
                    <h1 style="color:#3380cc; font-weight: bold;">REGISTRATION</h1>
                </div>
                <hr />
                <form action="<?php echo base_url()?>register" method="POST">
                <?php echo validation_errors(); ?>  
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="name" placeholder="Username" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                    </div> -->
                    <!-- <br> -->
                    <div class="form-group text-center">
                        <button name="register" type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <hr />
                </form>
                <a href="<?php echo base_url()?>">Existing User?</a>
            </div>


        
    </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>  
</body>
</html>