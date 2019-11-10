<?php
 
 $servername = "";
 $username = "";
 $password = "";
 $db = "";
 

    $conn = mysqli_connect($servername, $username, $password,$db);
    $name=$_POST['uname'];
    $score=$_POST['score'];
    
    $sql0 ="SELECT * FROM `scoreboard` WHERE name='$name'";
    $result0=mysqli_query($conn,$sql0);
    if(mysqli_num_rows($result0)==0){
    $sql ="INSERT INTO `scoreboard`(`name`, `score`) VALUES ('$name','$score')";

    $result=mysqli_query($conn,$sql);
    if($result){
      echo 'upload Success';
    }
    else{
      echo 'error';
    }}
    else{
      echo 'errrrrr';
    $sql ="UPDATE `scoreboard` SET `score`=`score`+'$score' WHERE `name`='$name'";
    $result=mysqli_query($conn,$sql);
    }
  
    mysqli_close($conn);
    header("Location: ./index.html"); 
    exit();
?>