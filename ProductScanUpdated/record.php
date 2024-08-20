<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>


<body class="body">

    <div class = "heading"> 
      <h1>Record</h1>
    </div>
  <div class="heading2">
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">Purchase</a>
      <a href="record.php">Purchase Log</a> 
    </div>

  <button class="openbtn" onclick="openNav()">&#9776;</button>
    <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft = "0";
        }
    </script>
  </div>
  <div class="mainRecord">
  <div class="table">
    <?php

    $csvFile = fopen('Record.csv', 'r');

    echo '<table>';
    echo '<td><b>'.'ID'.'</b></td>';
    echo '<td><b>' . 'First Name'. '</b></td>';
    echo '<td><b>' . 'Last Name'.'</b></td>';
    echo '<td><b>' . 'Product'. '</b></td>';
    echo '<td><b>' . 'Pay Status'. '</b></td>';
    echo '<tr>';
    while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
      echo '<tr>';
      foreach ($data as $value) {
        echo '<td>' . htmlspecialchars($value).'</td>';
      }
      echo '</tr>';
 
    }
    echo '</table>';

    fclose($csvFile);
    ?>
  </div>

    <br><br>
    <form name="reset" id="reset">
      <label for="reset"> This action will clear the Purchase Record</label>
      <button type = "submit" id="reset" formaction=reset.php> Reset </button>
    </form>
  </div>

</body>
</html>

