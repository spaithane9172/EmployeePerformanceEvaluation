<?php 
$empid=$_POST['empID'];
$empname=$_POST['empName'];
$tc=$_POST['TC'];
$wh=$_POST['workingH'];
$con=mysqli_connect("localhost","root","","emp");
if(!$con){
    echo mysqli_connect_error();
}
$sql="INSERT INTO `epe`(`empid`,`empname`,`tc`,`wh`) VALUE('$empid','$empname','$tc','$wh')";
$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>
<style>
    body{
        background-color: whitesmoke;
    }
    .container{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .alertbox{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 1px solid black;
        width: 60%;
        height: 30%;
        background-color:lightgray;
        font-weight: bold;
        font-size: 18px;
        box-shadow: 1px 1px 10px black;
    }
    .alertbox button{
        background-color: black;
        border-radius: 10px;
        width: 20%;
        height: 20%;
        color: white;
        font-weight: bold;
    }
</style>
<body>
    <script>
        function redirect(){
            window.location.href="addEmployee.php";
        }
    </script>
<div class="container">
    <div class="alertbox">
        <p>Data Submited Successfully</p>
        <button onclick="redirect()">Submit</button>
    </div>
</div>
</body>
</html>