<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPE</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/index.css">
    <?php
    $con = mysqli_connect("localhost", "root", "", "emp");
    if (!$con) {
        echo mysqli_connect_error();
    }
    $result = $con->query("SELECT empid,empname,tc,wh FROM `epe`");
    $td = $result->num_rows;
    $data = array();
    for ($i = 0; $i < $td; $i++) {
        $temp = array();
        $row = $result->fetch_array();
        array_push($temp, $row['empid'], $row['empname'], $row['tc'], $row['wh']);
        array_push($data, $temp);
    }
    ?>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row epeTitle">
            <div class="col d-flex justify-content-center align-items-center">
                <h2>Employee Performance Evaluation System</h2>
            </div>
        </div>
    </div>
    <div class="container" id="Edata">
        <div class="row tags mb-5">
            <div class="col-6 d-flex justify-content-center align-items-center active   ">
                <a href="addEmployee.php">
                    <h3>Employee Performance</h3>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <a href="addEmployee.php">
                    <h3>Add Employee</h3>
                </a>
            </div>
        </div>

        <div class="empPerformance mb-3">
            <div class="photo">Photo</div>
            <div class="EmpName">Employee Name</div>
            <div class="performance">Performance</div>
        </div>
    </div>
    <script>
        data = <?php echo json_encode($data); ?>;
        tdata = <?php echo $td; ?>
        //console.log(data);
        tcTotal = 0;
        whTotal = 0;

        for (i = 0; i < tdata; i++) {
            tcTotal += Number(data[i][2]);
            whTotal += Number(data[i][3]);
        }

        pdata = [];
        for (i = 0; i < tdata; i++) {
            temp = [];
            temp[0] = data[i][0];
            p = ((data[i][2] / tcTotal) * (tcTotal / tdata) / (1 / tdata)) * ((data[i][3] / whTotal) * (whTotal / tdata) / (1 / tdata));
            progress=((data[i][2]*100/5)+(data[i][3]*100/8))/2;
            temp[1] = p;
            temp[2]=progress;
            pdata[i] = temp;
        }
        for (i = 0; i < tdata; i++) {
            for (j = 0; j < tdata; j++) {
                if(pdata[i][1]>pdata[j][1]){
                    temp=pdata[i];
                    pdata[i]=pdata[j];
                    pdata[j]=temp;
                }
            }
        }
        console.log(pdata)
        console.log(data)
        for (i = 0; i < tdata; i++) {
            for (j = 0; j < tdata; j++) {
                if (pdata[i][0] == data[j][0]) {
                    document.getElementById('Edata').innerHTML += `<div class="empPerformanceData mb-1">
            <div class="photo">
                <img src="img/profile.png" id="img">
            </div>
            <div class="EmpName">${data[j][1]}</div>
            <div class="performance">
                <div class="outer ">
                    <div class="inner d-flex justify-content-center align-items-center" style="width:${pdata[i][2]}%">
                        ${pdata[i][2]}
                    </div>
                </div>
            </div>
        </div>`;
                }
            }
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>