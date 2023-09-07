<?php

function find_one_student($mail){

    $host = "localhost";
    $dbname = "lp_official";
    $username = "root";
    $password = "";
    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        } catch (PDOException $pe) {
        die ("Could not connect to the database $dbname :" . $pe->getMessage());
        }


        $sql = "SELECT * FROM `student` WHERE email= :email";

        $select = $conn->prepare($sql);

        $select ->execute([':email'=> $mail]);

        $fetch = $select->fetchAll(PDO::FETCH_ASSOC);

        return $fetch;
        var_dump($fetch);

}

if (isset($_GET["input-email-student"])) {
        
    $mail = $_GET["input-email-student"];
    $findOne = find_one_student($mail);      
         
 }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job-02</title>
</head>
<body>
    <form action="index.php" method="get">

        <label for="email">Email</label>
        <input type="email" name="input-email-student" id="email">
        <button type="submit">Validate</button>

    </form><br><br><br>
    
    <table class="tftable">
        <thead>

            <th>Id</th>
            <th>Grade_id</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Birthdate</th>
            <th>Gender</th>
        </thead>
        <tbody>
            <?php foreach ($findOne as $student): ?>
            <tr>
                <?php foreach ($student as $key => $value): ?>
                <td><?=$value?></td>
                <?php endforeach;?>
            </tr>
            <?php endforeach;?>

        </tbody>
        
    </table>
    
    
</body>
</html>