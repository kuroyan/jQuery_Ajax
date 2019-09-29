<?php
ini_set('display_error',1);

$q = $_GET["userid"];

//DB接続
include'./DB_Connect.php';
if( $q =="")
{
  $query="select * from books;";
}
else
{
  $query="select * from books where name like'%" .$q."%';";
}

$result = $db->query($query);
//echo $query."<br><br>";

$set = array();    //結果格納用
$count = 0;        //全件数
if ($result != FALSE) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        array_push($set, $row);
        $count++;
   }
}
?>
<ol>
<?php 
$i=0;
header('Content-type: text/plain; charset= UTF-8');
if (count($set) > 0) {
    foreach($set as $rec) { 
      $i++;
      if( $i<10)
       {
         printf("　%d：",$i);
       }
       else
       {
          echo $i."：";
       }
      echo $rec["isbn"]."：";
      echo $rec["name"]."<br>";
    }
}
else
{
  echo "no data<br>";
}
?>
</ol> 
