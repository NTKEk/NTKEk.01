<?php
include_once('connect.php')
   $Vip = $_POST['Vip'];
   $Fristname = $_POST['Fristname'];
   $lastname = $_POST['lastname'];
   $age = $_POST['age'];
   $sql = "INSERT INTO `member`(`Vip`, `Fristname`, `lastname`, `age`) VALUES ('$Vip',' $Fristname','$lastname','$age')";
   if($connect->query($sql)){
    echo "complete";
   }
?>