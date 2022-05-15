<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPE</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/addEmployee.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row epeTitle">
            <div class="col d-flex justify-content-center align-items-center">
                <h2>Employee Performance Evaluation System</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row tags mb-5">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <a href="index.php">
                    <h3>Employee Performance</h3>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center active">
                <a href="addEmployee.php">
                    <h3>Add Employee</h3>
                </a>
            </div>
        </div>

        <form action="insertdata.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Employee ID</label>
                <input type="text" class="form-control" name="empID">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Employee Name</label>
                <input type="text" class="form-control" name="empName" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Task Completed</label>
                <input type="text" class="form-control" name="TC" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Working Hours</label>
                <input type="text" class="form-control" name="workingH">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>