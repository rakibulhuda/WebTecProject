<?php
  $key=$_GET["sk"];
  $s="localhost";
  $u="root";
  $p="";
  $d="www_project";
  $conn=mysqli_connect($s,$u,$p,$d);
  $query= "select * from products where name='$key';";
  $rs=mysqli_query($conn,$query);

// echo "<table border=1>";
// echo "<tr>";
// echo "<td>ID</td>";
// echo "<td>Name</td>";
// echo "</tr>";

  while ($row=mysqli_fetch_assoc($rs)) {
      echo "Isbn          : ".$row["book_isbn"]."<br>";
      echo "Title        : ".$row["book_title"]."<br>";
      echo "Author        : ".$row["book_author"]."<br>";
      echo "Imago         : ".$row["book_image"]."<br>";
      echo "Description   : ".$row["book_descr"]."<br>";
      echo "Price         : ".$row["book_price"]."<br>";
      echo "Public Id : ".$row["publisherid"]."<br>";
      
    }
// echo "</table>";
?>
