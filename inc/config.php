<?php   

// $db= new mysqli('localhost', 'root', '', 'sbadmin2_starterkit');
// $db= new PDO("sqlite:data2.sqlite");
$db = new PDO("mysql:host=localhost;dbname=sbadmin2_starterkit", 'root');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($db->connect_error)
// {
//     die("error");
// }

// $db->exec("
//     CREATE TABLE users(
//         id INTEGER PRIMARY KEY AUTOINCREMENT,
//         name TEXT,
//         email TEXT  
//     )
// ");

// $stmtInsert = $db->prepare("
//     INSERT INTO users (name, email) VALUES (:name, :email)
// ");

// $stmtInsert->execute([
//     'name' => "iqi",
//     'email' => 'iqi@gmail.com'
// ]);

// echo 'jadfokj';
// exit();

// $stmtSelectAll = $db->query("SELECT * FROM users");
// $selectAllResult = $stmtSelectAll->fetchAll(PDO::FETCH_ASSOC);

// foreach($selectAllResult as $row)
// {
//     echo '<td>'.$row['email'].'</td>';
// }

// echo '<pre>';
// print_r($selectAllResult);  
// exit();

?>