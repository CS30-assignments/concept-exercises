<?php
// <!-- Create Arrays -->
// array containing odd numbers
// $oddNumbers = [1, 3, 5, 13, 27];
// print_r($oddNumbers);

// split string
// $names = "Azra-Betty-Caleb-Deena-Exra-Fae";
// print_r(explode("-", $names));

// "algorithm" 400 times
// $algorithm = [];
// for ($i = 0; $i < 400; $i++) {
//     array_push($algorithm, 'algorithm');
// }
// print_r($algorithm);

// multiples of 4
// $multiples = [];
// for ($i = 20; $i <= 800; $i += 4) { 
//     array_push($multiples, $i);
// }
// print_r($multiples);


// create random array
// function createRandomArray($n, $low, $high){
//     $randomNumbers = [];
//     for($i = 0; $i < $n; $i++){
//         array_push($randomNumbers, rand($low, $high));
//     }
//     print_r($randomNumbers);
// }

// <!-- Read Arrays -->
// index #3
// $myArray = ["yes", "no", "maybe", 42, 24];
// print_r($myArray[3]);
// 42

// info about the array
// function arrayInfo($array){
//     echo 'Length of Array: ' . count($array) . '<br />';
//     echo 'First Element: ' . $array[0] . '<br />';
//     echo 'Last Element: ' . $array[count($array) - 1] . '<br />';
// }

// log negative numbers
// $temps = [2, -4, -8, 0, 7, 3, -5];
// function printNegative($array){
//     foreach($array as $num){
//         if($num < 0){
//             echo $num . '<br />';
//         }
//     }
// }

// 80 or higher
// $grades1 = [70, 80, 82, 90, 65, 95, 90, 75, 80, 81];
// $grades2 = [90, 90, 92, 90, 95, 95, 90, 95, 85, 80];

// function countHonours($array){
//     $count = 0;
//     foreach($array as $num){
//         if($num >= 80){
//             $count ++;
//         }
//     }
//     return $count . '<br />';
// }


// print_r("Number of Honour Students in Class 1: " . countHonours($grades1));
// print_r("Number of Honour Students in Class 2: " . countHonours($grades2));

// sum of elements
// function arraySum($array){
//     $sum = 0;
//     foreach($array as $value){
//         $sum += $value;
//     }
//     return $sum . '<br />';
// }
 
// print_r("Sum of first number list is: " . strval(arraySum($nums1)));
// print_r("Sum of second number list is: " . strval(arraySum($nums2)));

// <!-- Update Arrays -->
// reassign first element
// $array1[0] = 'magenta';
// print_r($colours);

// increase third element
// $array1[2] += 700;
// print_r($array1);

// reassign last element
// array_splice($array1, array_pop($array1), 1,'the end');
// $array1 =['1', '2', '3', '4', '5','6', '7', '8'];
// $array1[count($array1) - 1] = 'the end';
// print_r($array1);

// add new element
// array_push($array1, 70);
// print_r($array1);

// add new elemnt to start
// array_unshift($array1, 500);
// print_r($array1);

// new element in sixth 
// array_splice($array1, 5, 0, 80);
// print_r($array1);

// adjust grades
// function adjustGrades($array){
//    for($i = 0; $i < count($array); $i++){
//        if($array[$i] == 48 || $array[$i] == 49){
//            $array[$i] = 50;
//         } elseif($array[$i] == 78 || $array[$i] == 79){
//            $array[$i] = 80;
//         }
//    }

//    return $array;
// }
// $grades1 = [70, 78, 49, 50, 81, 48, 79];

// print_r(adjustGrades($grades1));

// replace elements
// function replaceAll($array, $oldVal, $newVal){
//    for($i = 0; $i < count($array); $i++){
//       if($array[$i] == $oldVal){
//          $array[$i] = $newVal;
//       }
//    }
//    return $array;
// }
// $myArray = ["yes", "maybe", "no", "maybe", "yes", "no"];
// print_r(replaceAll($myArray, "maybe", "no"));


// swap values
// function swap($array, $index1, $index2){
//    $firstValue = $array[$index1];

//    $array[$index1] = $array[$index2];
//    $array[$index2] = $firstValue;

//    return $array;
// }
$letters = ["a", "b", "c", "d", "e", "f"];

// print_r(swap($letters, 0, 2))

// <!-- Delete Arrays -->
// remove last element
// array_pop($array1);

// remove first element
// array_shift($array1);

// remove fifth element
// array_splice($letters, 4, 1);
// print_r($letters);

// remove long names
// function removeLongNames($array){
//    for($i = 0; $i < count($array); $i++){
//       if(strlen($array[$i]) > 4){
//          array_splice($array, $i, 1);
//          $i--;
//       }
//    }
//    return $array;
// }

// $team1 = ["Adam", "Benjamin", "Caleb", "Dave", "Evelyn"];
// print_r(removeLongNames($team1));

// remove items
// function removeAll($array, $item){
//    for($i = 0; $i < count($array); $i++){
//       if($array[$i] == $item){
//          array_splice($array, $i, 1);
//          $i--;
//       }
//    }
//    return $array;
// }
// $nums = [10, 70, 70, 100, 70, 45, 70, 70, 70];

// print_r(removeAll($nums, 70));

// <!-- Herons Calculator -->
// function heronsFormula($a, $b, $c){
//    // find s
//    $s = ($a + $b + $c) / 2;
//    // find area
//    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

//    return $area;
// }

// print_r(heronsFormula(8, 9, 10));

function binarySearch($anArray, $item){
    // set lower and upper indexes
    $l_index = 0;
    $u_index = count($anArray) - 1;
  
    while ($l_index <= $u_index) {
        // set middle index
        $m_index = floor(($l_index + $u_index) / 2);
  
        // search for value and identify index number
        if ($item == $anArray[$m_index]) {
            return $m_index;
        } elseif ($item < $anArray[$m_index]) {
            $u_index = $m_index - 1;
        } else {
            $l_index = $m_index + 1;
        }
    }
    // if search could not find anything
    return -1;
}

 $numbers = [1, 2, 3, 4, 5, 6, 7];
 print_r(binarySearch($numbers, 8));

?>