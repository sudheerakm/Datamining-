<?php
include "dbconfig.php";
$appleCount = array();
$googleCount = array();
$samsungCount = array();
$sonyCount = array();
$appleClose = array();
$googleClose = array();
$samsungClose = array();
$sonyClose = array();
$label = array();

$appleNews = array();
$googleNews = array();
$sonyNews = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$apple_query = "SELECT count from 2018S_kasturim.Twitter where symbol='APPLE' ";

$apple_result = mysqli_query($conn,$apple_query);
if($apple_result){
  if ($apple_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($apple_result) ){            
      $appleCount[] = $row['count'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($apple_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

$index = 0;
for($i=0;$i<count($apple_result);$i++){
  $label = $index;
  $index+=10;
}
$google_query = "SELECT count from 2018S_kasturim.Twitter where symbol='GOOGL' ";

$google_result = mysqli_query($conn,$google_query);
if($google_result){
  if ($google_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($google_result) ){            
      $googleCount[] = $row['count'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($google_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

$sony_query = "SELECT count from 2018S_kasturim.Twitter where symbol='SNE' ";

$sony_result = mysqli_query($conn,$sony_query);
if($sony_result){
  if ($sony_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($sony_result) ){            
      $sonyCount[] = $row['count'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($sony_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

$apple_close_query = "SELECT close from 2018S_kasturim.Stocks where symbol='AAPL' ";

$apple_close_result = mysqli_query($conn,$apple_close_query);
if($apple_close_result){
  if ($apple_close_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($apple_close_result) ){            
      $appleClose[] = $row['close'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($apple_close_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}
$google_close_query = "SELECT close from 2018S_kasturim.Stocks where symbol='GOOGL' ";

$google_close_result = mysqli_query($conn,$google_close_query);
if($google_close_result){
  if ($google_close_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($google_close_result) ){            
      $googleClose[] = $row['close'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($google_close_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

$sony_close_query = "SELECT close from 2018S_kasturim.Stocks where symbol='SNE' ";

$sony_close_result = mysqli_query($conn,$sony_close_query);
if($sony_close_result){
  if ($sony_close_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($sony_close_result) ){            
      $sonyClose[] = $row['close'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($sony_close_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

$apple_news_query = "SELECT count from 2018S_brai.News where Symbol='AAPL'";

$apple_news_result = mysqli_query($conn,$apple_news_query);
if($apple_news_result){
  if ($apple_news_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($apple_news_result) ){            
      $appleNews[] = $row['count'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($apple_news_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}


$google_news_query = "SELECT count from 2018S_brai.News where Symbol='GOOG'";

$google_news_result = mysqli_query($conn,$google_news_query);
if($google_news_result){
  if ($google_news_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($google_news_result) ){            
      $googleNews[] = $row['count'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($google_news_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}


$sony_news_query = "SELECT count from 2018S_brai.News where Symbol='SNE'";

$sony_news_result = mysqli_query($conn,$sony_news_query);
if($sony_news_result){
  if ($sony_news_result->num_rows > 0) {        
    while( $row = mysqli_fetch_array($sony_news_result) ){            
      $sonyNews[] = $row['count'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($sony_news_result);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

mysqli_close($conn);
// $app_goo_twitter_correlation = correlation($appleCount,$googleCount);
// $samsung_sony_twitter_correlation = correlation($samsungCount,$sonyCount);
// $app_goo_stock_correlation = correlation($appleClose,$googleClose);
// $samsung_sony_stock_correlation = correlation($samsungClose,$sonyClose);
// $app_twitter_stock_correlation = correlation($appleCount,$appleClose);
// $goo_twitter_stock_correlation = correlation($googleCount,$googleClose);
// $samsung_twitter_stock_correlation = correlation($samsungCount,$samsungClose);
// $sony_twitter_stock_correlation = correlation($sonyCount,$sonyClose);


// function correlation($x, $y){

// $length= count($x);
// $mean1=array_sum($x) / $length;
// $mean2=array_sum($y) / $length;

// $a=0;
// $b=0;
// $axb=0;
// $a2=0;
// $b2=0;

// for($i=0;$i<$length;$i++)
// {
// $a=$x[$i]-$mean1;
// $b=$y[$i]-$mean2;
// $axb=$axb+($a*$b);
// $a2=$a2+ pow($a,2);
// $b2=$b2+ pow($b,2);
// }

// $corr= $axb / sqrt($a2*$b2);

// return $corr;
// }
?>