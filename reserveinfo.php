<?php include('dbconfig.php') ?>
<?php
if (isset ($_POST["submit"])) 
{
    $persons = $_POST["peoples"];
    $date = date("Y-m-d", strtotime($_POST["datedd"]));
    $time = $_POST["times"];
    
    $query = "insert into  tb_reserve (persons,date,time) values ('$persons','$date','$time')";
    $query_run = mysqli_query($con, $query);
    if ($query_run)
    {
        // $_SESSION['status'] = "$name added to database.";
        $_SESSION['status'] = "Date is Booked...";
        $_SESSION['status_code'] = "success";
        header("Location: paras.php");
    }
    else
    {
        $_SESSION['status'] = "$name not added to database.";
        $_SESSION['status_code'] = "error";
        header("Location: paras.php");
    }
}