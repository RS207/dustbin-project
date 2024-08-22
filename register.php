<?php
// $email = $_POST["email"];
// $company_name = $_POST["name"];
// $number = $_POST["number"];
// $organic = $_POST["organic"];
// $non_organic = $_POST["non_organic"];

// if(!empty($email) || !empty($password)) {
//     $host = "localhost";
//     $dbusername = "root";
//     $dbpassword = "Himanshu@12345";
//     $dbname = "check";

//     // Create a connection

//     $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
//     if(mysqli_connect_error()) {
//         die("connect error( ". mysqli_connect_errno(). ')' . mysqli_connect_error());
//     }
//     else{
//         $select = 'SELECT email From store Where email = ? Limit 1';
//         $insert = 'INSERT Into store (email, password) Values(?,?)';

//         // prepare statement
//         $stmt = $conn -> prepare($select);
//         $stmt -> bind_param("s", $email);
//         $stmt -> execute();
//         $stmt -> bind_result($mail);
//         $stmt -> store_result();
//         $rnum = $stmt -> num_rows;
//         if($rnum == 0) {
//             $stmt -> close();
//             $stmt = $conn -> prepare($INSERT);
//             $stmt -> bind_param("ss", $email, $password);
//             $stmt -> execute();
//             echo "New record inserted sucessfully";
//         }
//         else {
//             echo "sorry! someone already registered using your email";
//         }

//         $stmt -> close();
//         $conn -> close();
//     }
// }
// else {
//     echo "All filds are require";
//     die();
// }


?>