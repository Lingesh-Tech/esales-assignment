<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Student Registration</title>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="<?php echo base_url()?>student-details">
            <img src="assets/images/e-logo.png" width="60" height="60" style="border-radius:50%;"> 
        </a>
        
        <a class="nav-link btn btn-danger" href="<?php echo base_url()?>logout">Logout</a>
       
</nav>

    <div class="card w-50">
        <div class="card-header text-center">
            <h1 style="color:#3380cc; font-weight: bold;">STUDENT REGISTRATION</h1>
        </div>
        <div class="card-body">
            
            <div class="col-md-12">   
                <form action="StudentController/student_create" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input class="form-control" type="text" name="firstname" id="firstname">
                            </div>
                            <br>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastname" id="lastname">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input class="form-control" type="email" name="email" id="email">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Class</label>
                                <input class="form-control" type="text" name="classname" id="classname">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Section</label>
                                <input class="form-control" type="text" name="section" id="section">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Date of Birth</label>
                                <input class="form-control" type="date" name="dob" id="dob">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option>Select a status</option> 
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="3" id="address" name="address" cols="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Extra Curricular Activities</label>
                            <textarea class="form-control" rows="3" name="extracurricular" id="extracurricular" cols="4"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary" type="submit" name="Submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
            

    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>