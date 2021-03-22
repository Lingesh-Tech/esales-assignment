<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Student Update Form</title>
</head>
<body>
        <div class="card w-50">
            <div class="card-header">
                <h1 style="color:#3380cc;">Student Registration</h1>
            </div>
            <div class="card-body">
             
                <div class="col-md-12">   
                
                    <form action="StudentController/student_update/".<?php echo $student->id; ?> method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $student->firstname;?>">
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $student->lastname;?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Email Address</label>
                                    <input class="form-control" type="email" name="email" id="email" value="<?php echo $student->email;?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Class</label>
                                    <input class="form-control" type="text" name="classname" id="classname" value="<?php echo $student->classname;?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Section</label>
                                    <input class="form-control" type="text" name="section" id="section" value="<?php echo $student->section;?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date of Birth</label>
                                    <input class="form-control" type="date" name="dob" id="dob" value="<?php echo $student->dob;?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option>Select a status</option> 
                                       <?php foreach($students as $student)
                                       {?>
                                            <option value="<?php echo $student->status;?>"></option>
                                       <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" rows="3" id="address" name="address" cols="4" value="<?php echo $student->address;?>"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Extra Curricular Activities</label>
                                <textarea class="form-control" rows="3" name="extracurricular" id="extracurricular" cols="4" value="<?php echo $student->extracurricular;?>"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit" name="Submit">Submit</button>
                        </div>
                    </form>
                
                </div>
        
            </div>
        </div>

    </div>

</body>
</html>