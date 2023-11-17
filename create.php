<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="flex bg-gray-600 h-[100vh] items-center justify-center ">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$DB_name ="DB_MYBREIF";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";*/

// Create database-
$sql = "CREATE DATABASE if not exists DB_MYBREIF";
if ($conn->query($sql) === TRUE) {
 /* echo "Database created successfully";*/

  


$conn = mysqli_connect($servername, $username, $password, $DB_name);

      $sql = "CREATE TABLE if not exists Clients (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(30) NOT NULL,
        prenom VARCHAR(30) NOT NULL,
        dateNais DATE NOT NULL,
        nationalite VARCHAR(30) NOT NULL,
        genre VARCHAR(30) NOT NULL
        )";

      $conn-> query($sql);
       /* echo "Table created successfully"  . "<br>";*/


        $sql = "INSERT INTO Clients (id, nom, prenom, dateNais, nationalite, genre) 
        VALUES ('', 'walid', 'lhaila', '1974/01/01', 'US', 'Homme')";
        
        if ($conn->query($sql) === TRUE) {
         /* echo "New record created successfully";*/
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }else {
  /*echo "Error creating database: " . $conn->error;*/
}
$servername = "localhost";
$username = "root";
$password = "";
$DB_name ="DB_MYBREIF";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $DB_name); 

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";*/

// Create database-
$sql = "CREATE DATABASE if not exists DB_MYBREIF";
if ($conn->query($sql) === TRUE) {
 /* echo "Database created successfully";*/

  


$conn = mysqli_connect($servername, $username, $password, $DB_name);



$sql = "CREATE TABLE IF NOT EXISTS comptes (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  balance FLOAT(30) NOT NULL,
  devise VARCHAR(10) NOT NULL,
  rib VARCHAR(16) NOT NULL,
  client_id INT(6) UNSIGNED,
  FOREIGN KEY (client_id) REFERENCES clients(id) 
      ON DELETE CASCADE
      ON UPDATE CASCADE
  )";

$conn-> query($sql);
$date = date("10YmdHis");
$rib = $date.substr($date,0,16);

$conn-> query($sql);
  // echo "Table created successfully"  . "<br>";


$sql = "INSERT INTO Comptes (id, balance, devise, rib, client_id) 
VALUES ('', '8266155', '1651984', '$date', '358')";

if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
}



}else {
 echo "Error creating database: " . $conn->error;
}



$servername = "localhost";
$username = "root";
$password = "";
$DB_name ="DB_MYBREIF";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DB_name); 

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";*/

// Create database-
$sql = "CREATE DATABASE if not exists DB_MYBREIF";
if ($conn->query($sql) === TRUE) {
 /* echo "Database created successfully";*/

  


$conn = mysqli_connect($servername, $username, $password, $DB_name);



$sql = "CREATE TABLE if not exists Transaction   (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  montant VARCHAR(30) NOT NULL,
  types VARCHAR(30) NOT NULL,
  compte_id INT(6) UNSIGNED,
  FOREIGN KEY (compte_id) REFERENCES Comptes(id) 
  )";

$conn-> query($sql);
  //  echo "Table created successfully"  . "<br>";


$sql = "INSERT INTO Transaction (id, montant, types, compte_id) 
VALUES ('', '250456', 'début', '7')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}



}else {
//  echo "Error creating database: " . $conn->error;
}
?> 
<div class=" flex justify-center items-center relative bg-white w-[80%] h-[80%]  bg-[url('./360_F_208934723_tv3JlZKwlOhF1QiQdBruyaetwLRxTQCD.jpg')] bg-cover  shadow-2xl rounded-3xl">
       <img class="absolute left-0 top-0 h-18 w-36" src="Winance__3_-removebg-preview.png" alt="">
       <h1 class=" absolute text-center text-5xl font-bold top-28 text-white" >WELCOME BACK</h1>
  <div class="absolute text-white">
   
        <h3 class="text-center text-3xl font-bold ">LEAVE MONEY THE PROBLEME TO US & JUST</h3>
        <h1 class="text-center text-7xl font-bold font-serif">FOCUS ON YOUR BUSINESS</h1>
      <div class="text-center font-mono font-bold">
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, corrupti.</P>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
  </div>    
       <a href="index.php"><button class=" mt-96 font-bold  px-8 py-2 bg-green-50 border-4 shadow-md transition ease-in duration-700 border-blue-300 hover:bg-blue-600 font-serif">AJOUTER UN CLIENTS</button></a>
</div>

</body>
</html>