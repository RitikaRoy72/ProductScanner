<?php
  unlink("Record.csv");
  $create = fopen("Record.csv", "a");
  fclose($create)
?>
<html>
  <body>
  <meta http-equiv="refresh" content="0;  URL=record.php">
  </body>
</html>