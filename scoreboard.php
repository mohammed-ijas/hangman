<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HANGMAN</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
  <style>
    body{
        color : #f2f2f3;
    }    
  </style>
</head>

<body style="background-color: #ff555e">
  <!--div style="background-image: url('hangmanbg.jpg');"-->
  <div class="container-fluid">
    <div class="row" style="background-color: #1a1a00;">
      <div class="col-md-12 center">
      <div class="topnav">
        <a href="index.html">Home</a>
        <a href="rules.html">Rules</a>
        <a href="About.html">About</a>
        <a class="active" href="#">Scoreboard</a>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
      <div class="row"><div class="col-md-12 center margtop30"><h1 style="font-size : 70px;">SCOREBOARD</h1></div></div>
      <div class="row">
      <div class="col-md-12 center margtop30">
      <table>   
          <tr>
            <th>Pos</th>
            <th>Name</th>
            <th>Score</th>
         </tr>
  <?php
            $servername = "";
            $username = "";
            $password = "";
            $db = "";
 

            $conn = mysqli_connect($servername, $username, $password,$db);
            
            $sql = "SELECT * FROM `scoreboard` ORDER BY `score` DESC LIMIT 5";
            
            $result=mysqli_query($conn,$sql);
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['score']."</td>";
            echo "<tr>";
    }


    ?>
    </div>
    </div>
</table>  
</div>
</body>

</html>