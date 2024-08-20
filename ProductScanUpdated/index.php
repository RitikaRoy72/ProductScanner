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
      <h1>Scan Out Products</h1>
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

    <div class = "main" >
      <form class = "formBody" id="studentInput" action="studentId.php" method="post">
        <label for ="productID">Product:</labeL>
        <input id = "productID" name="productID" type="text"></input>
        <br><br>
        <label for = "student">Student ID:</label>
        <input id = "student" name="student" type="text"></input>
        <br><br>
        <label for = "paid"> Paid:</label>
        <input type="checkbox" id="paid" name="paid"> </checkbox>
        <br><br>
        <button class="generalButton" type="submit" style="width:60px; hieght:5px"> submit</button>
      </form>
    </div>
    <script src="script.js"></script>

    
</body>

</html>