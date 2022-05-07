<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=arnavchacks37103.ipagemysql.com;dbname=contact", "contact", "Contact#1234#");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // create prepared statement
    $sql = "INSERT INTO contact (name, phone, email, descr) VALUES (:name1, :phone1, :email, :descr)";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':name1', $name);
    $stmt->bindParam(':phone1', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':descr', $descr);
    

    $name = $_POST["name1"];
    $phone = $_POST["phone1"];
    $email = $_POST["email"];
    $descr = $_POST["descr"];
    // execute the prepared statement
    $stmt->execute();
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
// Close connection
unset($pdo);

?>
