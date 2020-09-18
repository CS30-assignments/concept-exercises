<!-- Create Arrays -->
<?php

// array containing odd numbers
// $oddNumbers = [1, 3, 5, 13, 27];
// print_r($oddNumbers);

// split string
// $names = "Azra-Betty-Caleb-Deena-Exra-Fae";
// print_r(explode("-", $names));

// "algorithm" 400 times
// for ($i = 0; $i < 400; $i++) {
//     $algorithm[] = 'algorithm';
// }
// print_r($algorithm);

// multiples of 4
$multiples = [];
for ($i = 20; $i <= 800; $i += 4) { 
    array_push($multiples, $i);
}
print_r($multiples);

// create random array
// function createRandomArray($n, $low, $high){
//     for ($i = 0; $i < $n; $i++) {
//         $randNum[] = (rand($low, $high));
//     }
// }




?>