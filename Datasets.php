<!DOCTYPE html>
<html>
<head>
  
  <style>
    table {
      /*border-collapse: collapse;*/
      width: 50%;

    }

    th, td {
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <p align = "center"><b>1.Twitter table</b></p>
  <?php
  include "dbconfig.php";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT * FROM 2018S_kasturim.Twitter where Symbol in ('APPLE','GOOGL','SNE')";
  $result = mysqli_query($conn,$query);


  if($result){
    if ($result->num_rows > 0) {
      ?>
      <table border="1" align="center">
       <thead>
         <tr>
          <th><b>ID</b></th>
          <th><b>Symbol</b></th>
          <th><b>Date</b></th>
          <th><b>Start_time</b></th>
          <th><b>End_time</b></th>
          <th><b>Count</b></th>     
        </tr>
      </thead>
      <tbody>
        <?php
        while( $row = mysqli_fetch_array($result) ){
          echo "<tr><td>{$row['id']}</td>
          <td>{$row['symbol']}</td>
          <td>{$row['date']}</td>
          <td>{$row['start_time']}</td>
          <td>{$row['end_time']}</td>
          <td>{$row['count']}</td>
        </tr>\n";
      } 
    }
    else{
      echo"<br>No records in the database.\n";
      mysqli_free_result($result);
    }
  }
  else{ 
    echo"<br>No result set return from the database.\n";   
  }
  ?>
</tbody>
</table>
<br/>
<p align = "center"><b>2.Stocks table</b></p>
<?php
$query = "SELECT * FROM 2018S_kasturim.Stocks where Symbol in ('AAPL','GOOGL','SNE')";
  $result = mysqli_query($conn,$query);


  if($result){
    if ($result->num_rows > 0) {
      ?>
      <table border="1" align="center">
       <thead>
         <tr>
          <th><b>ID</b></th>
          <th><b>Symbol</b></th>
          <th><b>Date</b></th>
          <th><b>Open</b></th>
          <th><b>High</b></th>
          <th><b>Low</b></th> 
          <th><b>Close</b></th>
          <th><b>Adj_close</b></th>
          <th><b>Volume</b></th>    
        </tr>
      </thead>
      <tbody>
        <?php
        while( $row = mysqli_fetch_array($result) ){
          echo "<tr><td>{$row['id']}</td>
          <td>{$row['symbol']}</td>
          <td>{$row['date']}</td>
          <td>{$row['open']}</td>
          <td>{$row['high']}</td>
          <td>{$row['low']}</td>
          <td>{$row['close']}</td>
          <td>{$row['adj_close']}</td>
          <td>{$row['Volume']}</td>
        </tr>\n";
      } 
    }
    else{
      echo"<br>No records in the database.\n";
      mysqli_free_result($result);
    }
  }
  else{ 
    echo"<br>No result set return from the database.\n";   
  }
  
?>
</tbody>
</table>
<br/>
<p align = "center"><b>3.News Table</b></p>
<?php
$query = "SELECT * FROM 2018S_brai.News";
  $result = mysqli_query($conn,$query);


  if($result){
    if ($result->num_rows > 0) {
      ?>
      <table border="1" align="center">
       <thead>
         <tr>
          <th><b>Symbol</b></th>
          <th><b>Date</b></th>
          <th><b>Start_time</b></th>
          <th><b>End_time</b></th>
          <th><b>Count</b></th>     
        </tr>
      </thead>
      <tbody>
        <?php
        while( $row = mysqli_fetch_array($result) ){
          echo "<tr><td>{$row['Symbol']}</td>
          <td>{$row['Date']}</td>
          <td>{$row['Start_time']}</td>
          <td>{$row['End_time']}</td>
          <td>{$row['Count']}</td>
        </tr>\n";
      } 
    }
    else{
      echo"<br>No records in the database.\n";
      mysqli_free_result($result);
    }
  }
  else{ 
    echo"<br>No result set return from the database.\n";   
  }
  ?>
</tbody>
</table>


</body>
</html>