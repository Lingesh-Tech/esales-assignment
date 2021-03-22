<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Student Details</title>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="<?php echo base_url()?>student-details">
            <img src="assets/images/e-logo.png" width="60" height="60" style="border-radius:50%;"> 
        </a>
        
        <a class="nav-link btn btn-danger" href="<?php echo base_url()?>logout">Logout</a>
</nav>

    <div class="card w-75">
        <div class="card-header text-center">
            <h1 style="color:#3380cc; font-weight: bold;">STUDENT DETAILS</h1>
            <a class="btn btn-primary" style="float:right;" href="<?php echo base_url()?>student-form">Add Student Data</a>
        
        </div>
        <div class="card-body">
            
            <section class="container">
                <br>
                <table class="table table-fluid" id="myTable">
                <thead>
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Date Of Birth</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Extra Curricular</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $student) 
                    {?>
                    <tr>
                    <td><?php echo $student['firstname']?></td>
                    <td><?php echo $student['lastname']?></td>
                    <td><?php echo $student['email']?></td>
                    <td><?php echo $student['classname']?></td>
                    <td><?php echo $student['section']?></td>
                    <td><?php echo $student['dob']?></td>
                    <td><?php echo $student['status']?></td>
                    <td><?php echo $student['address']?></td>
                    <td><?php echo $student['extracurricular']?></td>
                    <td>    
                    <a href="<?php echo base_url()?>student-edit/<?php echo $student['id']?>">Update</a>&nbsp&nbsp&nbsp
                    <a href="StudentController/student_delete/<?php echo $student['id']?>">Delete</a>

                    </td>
                    </tr>
                </tbody> 
                <?php } ?>           
                </table>
            </section>
            

        </div>
                

    </div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>