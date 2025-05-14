<?php
$con = mysqli_connect('localhost','root', '');
mysqli_select_db($con,"db_register_login");
$query = "SELECT * FROM `tb_num_people`";
$result= mysqli_query($con, $query);
$query1 = "SELECT * FROM `tb_time`";
$result1= mysqli_query($con, $query1);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <!-- Include Bootstrap 5 CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
 <!-- Include Bootstrap 5 Datepicker CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <title>Reserve</title>
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>
    <table>
        <tr>
            <td><img src="PHOTOS/reservation.JPG" class="responsive" width="650PX" /></td>
            <td>
                <table>

                    <form id="form" action="reserveinfo.php" method="post">

                        <label for="people">Number of People (optional)</label>                        
                        <select name="peoples">
                        <option value="">Number of People</option>
                            <?php while ($row = mysqli_fetch_array($result)):;?>
                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                            <?php endwhile;?>                             
                            </select>

                            <label for="datepicker">Date</label>
                            <input type="text" id="datepicker" name="datedd" placeholder="Date" required>

                        <label for="people">Select Time (optional)</label>                        
                        <select name="times">
                        <option value="">Time</option>
                            <?php while ($row = mysqli_fetch_array($result1)):;?>
                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                            <?php endwhile;?>                             
                            </select>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>

                    </form>
                </table>
            </td>
        </tr>
    </table>

 <!-- Include Bootstrap 5 JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
 <!-- Include jQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- Include Bootstrap 5 Datepicker JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
      $("#datepicker").datepicker({ minDate: new Date(), maxDate: "+1M +10D" })
        .on('change', function () { $('.datepicker').hide(); })
    });

</script>
   
</body>

</html>