

<?php


function my_fizz_buzz(int $length) : array{

    $result = [];

    for($i = 1; $i <= $length; $i++){

        switch ($i) {
            case ($i % 3 == 0 && $i % 5 == 0):
                $result[] = "FizzBuzz";

            case ($i %3 == 0) :
                $result[] = "Fizz";
                
            case ($i %5 == 0) :
                $result[] = "Buzz";
        }
        
    }
    return $result;

}
var_dump(my_fizz_buzz(50));

?>