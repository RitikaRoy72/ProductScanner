<?php
  class CreateClass{
    function __construct($ID, $product, $paid){
      $this -> ID = $ID;
      $this -> product = $product;
      $this -> paid = $paid;
    }

    function createClass(){
        /*Search for a studnt via ID, open a file and write to it*/
      $classlist = fopen("Record.csv", "a");
      $studentlist = fopen("StudentStaff.csv", "r");
      
      while (($data = fgetcsv($studentlist)) !== false){
        if (in_array($this->ID, $data)){
          $int = 0;
          foreach ($data as $i){
            $int ++;
            if ($int < 4){
              fwrite($classlist, $i.",");
            }
            else{
              fwrite($classlist, $this->product.",");
              if ($this->paid == "on"){
                fwrite($classlist, "paid\n");
              } else{
                fwrite($classlist, "not paid\n");
              }
            }
          }    
        }
      }
    }
  }


$ID = $_REQUEST['student'];
$product = $_REQUEST['productID'];
$paid = $_REQUEST['paid'];

$call = new CreateClass($ID, $product, $paid);
$call -> createClass();

?>
<html>
  <body>
  <meta http-equiv="refresh" content="0;  URL=index.php">
  </body>
</html>
