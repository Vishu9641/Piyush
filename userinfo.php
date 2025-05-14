<?php include('dbconfig.php') ?>
<?php
if (isset ($_POST["submit"])) 
{
    $name = $_POST["user"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $comment = $_POST["comment"];
    if (empty ($name))
    {
        $nameError = "Name is required";
    } 
    else
    {
        $name = trim($name);
        $name = htmlspecialchars($name);
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) 
        {
            $nameError = "Only letters and white space allowed for Name";
        }
    }
    $query = "insert into tb_userindexdata (name,email,mobile,comment) values ('$name','$email','$mobile','$comment')";
    $query_run = mysqli_query($con, $query);
    if ($query_run)
    {
        // $_SESSION['status'] = "$name added to database.";
        $_SESSION['status'] = "Thank you for connecting us...";
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