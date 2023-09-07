
<?php

function find_all_students(){

    $host = "localhost";
    $dbname = "lp_official";
    $username = "root";
    $password = "";
    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        } catch (PDOException $pe) {
        die ("Could not connect to the database $dbname :" . $pe->getMessage());
        }

        $sql = "SELECT * FROM `student`";

        $select = $conn->prepare($sql);

        $select ->execute();

        $fetch = $select->fetchAll(PDO::FETCH_ASSOC);

        return $fetch;
}

    $array = find_all_students();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job-01</title>
</head>
<body>


    
    
    <table class="tftable">
        <thead>
    <?php foreach($array[0] as $key => $value):?>
            <th><?=$key;?></th>
            <?php endforeach; ?>
        </thead>
        <tbody>
            <?php foreach ($array as $student): ?>
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