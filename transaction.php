<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body  class="flex bg-gray-600 h-[100vh] items-center justify-center">

<?php

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


?>

<div class="bg-white w-[80%] h-[80%] relative  bg-[url('./360_F_208934723_tv3JlZKwlOhF1QiQdBruyaetwLRxTQCD.jpg')] bg-cover  shadow-2xl rounded-3xl">
       
        <div class="flex place-content-between justify-center rounded-t-3xl bg-blue-500 h-20  shadow-2xl">
        <a href="create.php"><img class="absolute left-0 top-0 h-18 w-36" src="Winance__3_-removebg-preview.png" alt=""></a>
            <ul class="flex flex space-x-16 text-lg font-bold text-white m-4 text-center items-center">
                <li class="bg-transparent  hover:text-white hover:bg-black rounded-3xl transition ease-out duration-700 h-8 w-36"><a href="index.php">CLIENTS</a></li>
                <li class="bg-transparent  hover:text-white hover:bg-black rounded-3xl transition ease-out duration-700 h-8 w-36 "><a href="compte.php">COMPTES</a></li>
                <li class="bg-transparent  hover:text-white hover:bg-black rounded-3xl transition ease-out duration-700 h-8 w-44"><a href="transaction.php">TRANSACTIONS</a></li>
            </ul>
        </div>

        <table class="w-3/5 mx-auto mt-10 text-white shadow-lg">
  <tr class="italic h-10 bg-gray-600">
    <th class='border-4 border-white-600'>ID</th>
    <th class='border-4 border-white-600'>MONTANT</th>
    <th class='border-4 border-white-600'>TYPE</th>
    <th class='border-4 border-white-600'>COMPTES BY ID</th>
  </tr>

  <?php
  $sql = "SELECT id, montant, types, compte_id FROM Transaction";
$result = mysqli_query($conn, $sql);


if (isset($_GET['compte']))
{
  $id = $_GET['compte'];
  $sql = "SELECT * FROM Transaction WHERE compte_id = '$id'";
  $result = mysqli_query($conn, $sql);
}


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr  class='border-4 border-white-600 text-center'><td class='border-4 border-white-600'>" . $row["id"]. " </td><td class='border-4 border-white-600'> " . $row["montant"]. "</td><td class='border-4 border-white-600'> " . $row["types"]. " </td><td class='border-4 border-white-600'>" . $row["compte_id"]. "</td>";

    echo "</tr>";
  }
} else {
 /* echo "0 results";*/
}

$conn->close();
?>

  </table>
  </div>
    
</body>
</html>