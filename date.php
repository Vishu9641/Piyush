<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Restrict date range</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#datepicker").datepicker({ minDate: 0, maxDate: "+1M +10D" })
        .on('change', function () { $('.datepicker').hide(); })
    });

  </script>
</head>

<body>

  <p>Date: <input type="text" id="datepicker"></p>




</body>

</html>