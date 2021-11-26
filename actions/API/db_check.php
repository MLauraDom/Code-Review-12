<?php

require_once("conn.php");

$sql = "SELECT * FROM places WHERE id=$id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

   $name=$row['name'];
   $price=$row['price'];

mysqli_close($conn);