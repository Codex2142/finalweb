<?php 
include("Koneksi.php");

//create db
$query = "CREATE DATABASE IF NOT EXISTS sc";
$result = mysqli_query($connection, $query);

if(!$result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Database <b>'sc'</b> berhasil dibuat... <br>";
}


//select db
$result = mysqli_select_db($connection, "sc");
  if(!$result){
    die ("Query Error: ".mysqli_errno($connection)." - ".mysqli_error($connection));
  }
  else {
    echo "Database <b>'sc'</b> berhasil dipilih... <br>";
  }

  
//tabel user
  $query = "DROP TABLE IF EXISTS user";
  $query_result = mysqli_query($connection, $query);
  if(!$query_result){
    die ("Query Error: ".mysqli_errno($connection)." - ".mysqli_error($connection));
  }
  else {
    echo "Tabel <b>'user'</b> berhasil dihapus... <br>";
  }
  $query  = "
    CREATE TABLE user 
      (id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        phone VARCHAR(15) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        address TEXT,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
  $query_result = mysqli_query($connection, $query);
  if(!$query_result){
      die ("Query Error: ".mysqli_errno($connection)." - ".mysqli_error($connection));
  }
  else {
    echo "Tabel <b>'user'</b> berhasil dibuat... <br>";
  }
?>
