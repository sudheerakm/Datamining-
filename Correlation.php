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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$apple_query = "SELECT (count/5000) as count from 2018S_kasturim.Twitter where symbol='APPLE' ";

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
$google_query = "SELECT (count/5000) as count from 2018S_kasturim.Twitter where symbol='GOOGL' ";

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

$sony_query = "SELECT (count/5000) as count from 2018S_kasturim.Twitter where symbol='SNE' ";

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

$apple_close_query = "SELECT (close/100) as close from 2018S_kasturim.Stocks where symbol='AAPL' ";

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
$google_close_query = "SELECT (close/100) as close from 2018S_kasturim.Stocks where symbol='GOOGL' ";

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

$sony_close_query = "SELECT (close/100) as close from 2018S_kasturim.Stocks where symbol='SNE' ";

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

$apple_news_query = "SELECT (Count/100) as count from 2018S_brai.News where Symbol='AAPL' and Date>='2018-02-14' and Date<='2018-02-26'";

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


$google_news_query = "SELECT (Count/100) as count from 2018S_brai.News where Symbol='GOOG' and Date>='2018-02-14' and Date<='2018-02-26'";

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


$sony_news_query = "SELECT (Count/100) as count from 2018S_brai.News where Symbol='SNE' and Date>='2018-02-14' and Date<='2018-02-26' ";

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

$apple_close_query2 = "SELECT (close/100) as close from 2018S_kasturim.Stocks where symbol='AAPL' and date>='2018-02-14' and date<='2018-02-26' ";

$apple_close_result2 = mysqli_query($conn,$apple_close_query2);
if($apple_close_result2){
  if ($apple_close_result2->num_rows > 0) {        
    while( $row = mysqli_fetch_array($apple_close_result2) ){            
      $appleClose2[] = $row['close'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($apple_close_result2);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}
$google_close_query2 = "SELECT (close/100) as close from 2018S_kasturim.Stocks where symbol='GOOGL' and date>='2018-02-14' and date<='2018-02-26' ";

$google_close_result2 = mysqli_query($conn,$google_close_query2);
if($google_close_result2){
  if ($google_close_result2->num_rows > 0) {        
    while( $row = mysqli_fetch_array($google_close_result2) ){            
      $googleClose2[] = $row['close'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($google_close_result2);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

$sony_close_query2 = "SELECT (close/100) as close from 2018S_kasturim.Stocks where symbol='SNE' and date>='2018-02-14' and date<='2018-02-26' ";

$sony_close_result2 = mysqli_query($conn,$sony_close_query2);
if($sony_close_result2){
  if ($sony_close_result2->num_rows > 0) {        
    while( $row = mysqli_fetch_array($sony_close_result2) ){            
      $sonyClose2[] = $row['close'];
    }
  }
  else{
    echo"<br>No records in the database.\n";
    mysqli_free_result($sony_close_result2);
  }
}
else{ 
  echo"<br>No result set return from the database.\n";   
}

mysqli_close($conn);

$app_goo_twitter_correlation = correlation($appleCount,$googleCount);
$app_sony_twitter_correlation = correlation($appleCount,$sonyCount);
$goo_sony_twitter_correlation = correlation($googleCount,$sonyCount);
$app_goo_stock_correlation = correlation($appleClose,$googleClose);
$app_sony_stock_correlation = correlation($appleClose,$sonyClose);
$goo_sony_stock_correlation = correlation($googleClose,$sonyClose);
$app_twitter_stock_correlation = correlation($appleCount,$appleClose);
$goo_twitter_stock_correlation = correlation($googleCount,$googleClose);
$sony_twitter_stock_correlation = correlation($sonyCount,$sonyClose);

$app_goo_news_correlation = correlation($appleNews,$googleNews);
$app_sony_news_correlation = correlation($appleNews,$sonyNews);
$goo_sony_news_correlation = correlation($googleNews,$sonyNews);

$app_news_stock_correlation = correlation($appleNews,$appleClose2);
$goo_news_stock_correlation = correlation($googleNews,$googleClose2);
$sony_news_stock_correlation = correlation($sonyNews,$sonyClose2);

function correlation($x, $y){

$length= count($x);
$mean1=array_sum($x) / $length;
$mean2=array_sum($y) / $length;

$a=0;
$b=0;
$axb=0;
$a2=0;
$b2=0;

for($i=1;$i<$length;$i++)
{
$a=$x[$i]-$mean1;
$b=$y[$i]-$mean2;
$axb=$axb+($a*$b);
$a2=$a2+ pow($a,2);
$b2=$b2+ pow($b,2);
}

$corr= $axb / sqrt($a2*$b2);

return $corr;
}

echo "Apple and Google Twitter vs Twitter Correlation: ",$app_goo_twitter_correlation,"<br/>";
echo "Apple and Sony Twitter vs Twitter Correlation: ",$app_sony_twitter_correlation,"<br/>";
echo "Google and sony Twitter vs Twitter Correlation: ",$goo_sony_twitter_correlation,"<br/>","<br/>";

echo "Apple and Google Stock vs Stock Correlation: ",$app_goo_stock_correlation,"<br/>";
echo "Apple and Sony Stock vs Stock Correlation: ",$app_sony_stock_correlation,"<br/>";
echo "Google and Sony Stock vs Stock Correlation: ",$goo_sony_stock_correlation,"<br/>","<br/>";

echo "Apple Twitter vs Stock Correlation: ",$app_twitter_stock_correlation,"<br/>";
echo "Google Twitter vs Stock Correlation: ",$goo_twitter_stock_correlation,"<br/>";
echo "Sony Twitter vs Stock Correlation: ",$sony_twitter_stock_correlation,"<br/>","<br/>";

echo "Apple News vs Google News Correlation: ",$app_goo_news_correlation,"<br/>";
echo "Apple News vs Sony News Correlation: ",$app_sony_news_correlation,"<br/>";
echo "Google News vs Sony News Correlation: ",$goo_sony_news_correlation,"<br/>","<br/>";

echo "Apple News vs Stock Correlation: ",$app_news_stock_correlation,"<br/>";
echo "Google News vs Stock Correlation: ",$goo_news_stock_correlation,"<br/>";
echo "Sony News vs Stock Correlation: ",$sony_news_stock_correlation,"<br/>","<br/>";

?>