<?php
// echo "We will build this nice eCommerce website!";

// using ternary  operator!
echo "<br>";
// $n = 10;
// $number_word = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "its not Ten or twelve");
// echo $number_word;

// // state[0]="dhaka";
// // state[] = array("dhaka");
// $state[0] = "dhaka";
// // $state[0]="dhaka";
// print_r($state);


// $state = array("a", "r", "syl");
// echo array_search( "syl", $state);

# Write your PHP code from here
//   function find_string($a,$b){
//     fscanf(STDIN,"%s %s",$a,$b);
// print($a). "<br>";
// print($b). "<br>";

// $a = "aa5aa465464ajda";
// $b = "aa";
// fscanf(STDIN,"%s %s",$a,$b);
// $len_a = strlen($a);
// $len_b = strlen($b);

// $count = 0;
// for ($i = 0; $i <= $len_a; $i++) {
//     $pos = strpos($a, $b, $i);
//     if ($pos !== false) {
//         // print $pos . "<br>";
//         $i = $pos;
//         $count++;
//     }


// }
// print $count;

//2nd problem


//    # Write your PHP code from here

$a = "aa5aa4654hbjbj64ajdt";

// fscanf(STDIN,"%s %s",$a,$b);
$len_a = strlen($a);

$last_letter = substr($a, $len_a - 1);
echo "Last letter is :" . $last_letter . "<br>";
echo "<br>";
$b = $last_letter;

$len_b = strlen($b) . "<br>";
echo "Current Sub String is now {$b} and length is : " . $len_b . "<br>";

// $status = 0;
// for ($i = 0; $i <= $len_a; $i++) {
//     $pos = strpos($a, $b, $i);
//     if ($pos !== false) {
//         // print $pos . "<br>";
//         $i = $pos;
//         $count++;
//     }
// }
// print $status;

