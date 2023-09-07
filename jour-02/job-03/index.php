<?php

function insert_student(string $grade_id, string $email, string $fullname, string $birthdate, string $gender){

    $host = "localhost";
    $dbname = "lp_official";
    $username = "root";
    $password = "";

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        } catch (PDOException $pe) {
        die ("Could not connect to the database $dbname :" . $pe->getMessage());
        }


        $sql = "INSERT INTO `student`(`grade_id`, `email`, `fullname`, `birthdate`, `gender`) VALUES (:grade_id, :email, :fullname, :birthdate, :gender) ";

        $insert = $conn ->prepare($sql);

        $insert -> execute([":grade_id" => $grade_id, ":email" => $email, ":fullname" => $fullname, ":birthdate" => $birthdate, ":gender" => $gender]);


        if (isset($_POST["validate"])) {


            $grade_id = $_POST[""];
            $email = $_POST[""];
            $fullname = $_POST[""];
            $birthdate = $_POST[""];
            $gender =$_POST[""];
            
            insert_student($grade_id, $email, $fullname, $birthdate, $gender);
        }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job-03</title>
</head>
<body>
    <form action="" method="post">

    <label for="email">Email</label>
    <input type="email" name="input-email" id=""><br><br>
    
    <label for="fullname">Full name</label>
    <input type="text" name="input-fullname"><br><br>

    <label for="gender">Gender</label>
    <select name="input-gender" id="">
        <option value="male">Homme</option>
        <option value="femal">Femme</option>
    </select><br><br>

    <label for="date">Birthdate</label>
    <input type="date" name="input-birthdate" id=""><br><br>

    <label for="number">Grade id</label>
    <input type="number" name="input-grade_id" id=""><br><br>
    <input type="submit" value="validate" name="validate">

    </form>
    
</body>
</html>