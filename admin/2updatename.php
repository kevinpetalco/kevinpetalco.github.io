<?php include('../1connection.php'); ?>
<?php
// Choose a function depends on value of $_POST["action"]
if($_POST["action"] == "insert2"){
  editname();
}
function editname(){
  global $con;
  $name2 = $_POST["name2"];
  $sellerID = $_POST["sellerID"];
  // Check if variable value is empty
  if(empty($name2) ){
    echo 3;
  }else{

        // Check if email still available
       
          $query = "UPDATE seller set sellername = '$name2' WHERE sellerID='$sellerID'";
          mysqli_query($con, $query);
        
          echo 1; 
        
  }
}
