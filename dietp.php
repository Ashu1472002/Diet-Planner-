<?php
require("database.php");
if(isset($_POST["submit"])){
    $breakfast = $_POST['breakfast'];
    $mid = $_POST['mid'];
    $lunch = $_POST['lunch'];
    $evening = $_POST['evening'];
    $dinner = $_POST['dinner'];

    $break_data= implode($breakfast);
    $mid_data= implode($mid);
    $lunch_data= implode($lunch);
    $eve_data= implode($evening);
    $dinn_data= implode($dinner);
    // $all_data= implode($lunch);
    // $all_data= implode($evening);
    // $all_data= implode($dinner);
    // echo $b_data;
    // echo $m_data;
  $sql="INSERT INTO `dietplan`( `breakfast`, `mid`, `lunch`, `evening`, `dinner`) VALUES('$break_data','$mid_data','$lunch_data','$eve_data','$dinn_data')";
  $result= mysqli_query($conn,$sql);
  if($result){
      header("location:mydietplan.php");
  }
  else{
    die(mysqli_error($conn));
  }
    
    
}
?>