<?php



 function findOneStudent(int $id): array{

    $pdo = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', '');
    $sql = "SELECT * FROM student WHERE id = :id";
    
    $statement = $pdo -> prepare($sql);
    $statement -> execute([':id' => $id]);
    $student = $statement -> fetch(PDO::FETCH_ASSOC);

    return  $student;

}


$findOne = findOneStudent(5);
var_dump($findOne)




?>
