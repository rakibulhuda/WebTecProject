<?php
  $key=$_GET["sk"];
  $s="localhost";
  $u="root";
  $p="";
  $d="www_project";
  $conn=mysqli_connect($s,$u,$p,$d);
  $query= "select name from products where name like '%$key%';";
  $rs=mysqli_query($conn,$query);

  echo "<table>";
  while ($row=mysqli_fetch_assoc($rs))
    {
      echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "</tr>";
    }
    echo "</table>";
   ?>
