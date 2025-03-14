<?php
//Birinchi dars
// $rang = 'yashil ';
// $ism = 'Suxrob ';
// $variable = 'o\'zgaruvchilar';
// echo $rang;
// //Bu yerda Salom so'zini chiqaradi.
// echo "Assalomu alaykum";
// echo "Va";
// echo $ism;
// echo phpversion()

// /* Assalomu alaykm bu kop qatorlik komment
// bemalol amma narsa yozish mumkin */

/* O'zgaruvchilar */
// $ism = "Shohjahon Shomurodov   <br>";
// echo $ism;
// $son = 15665465 . '<br>';
// $float = 125.254  . '<br>';
// echo $son;
// echo $float;
//case-sensative - katta kichkina harflar ahmiyatga ega


// function qoshish(){
//         global $a;
//         $a =10;
//         $b =20;
//         $sum = $a+$b;
//         echo $sum;
// }
// qoshish()

// echo 14564;
// // print $son;
// echo "<h1> Assalomu alaykum<h1>"
// $ism = 'yangi ism ' ;
// $Ism = 'ozgargan ism';

// // echo $ism . '-bu ism qoshildi'
// $txt1 = 'Learn PHP';
// $txt2 = "W3school.com";
// $x = 5;
// $y = 6;
// /* 
// echo "<h2>" . $txt1 . "</h2>";
// echo 'Study PHP at ' . $txt2 . '<br>';
// echo $x + $y
//  */

//  print "<h2>" . $txt1 . "</h2>";
//  print 'Study PHP at ' . $txt2 . '<br>';
//  print $x + $y

 /* DAta types Ma'lumot turlari */
// $boolen = true;
// $array = ['birinchi', 'ikkinchi', 'uchinchi', 23, 34.43, true];
// $array1 = array();
// print_r($array)
// class Car {
//     public $color;
//     public $model;
//     public function __construct($color, $model) {
//       $this->color = $color;
//       $this->model = $model;
//     }
//     public function message() {
//       return "My car is a " . $this->color . " " . $this->model . "!";
//     }
//   }
  
//   $myCar = new Car("red", "Volvo");
//   var_dump($myCar);

// $s = null;
// var_dump($s)
// $string = 'salom, mening ismim Jamol';
// echo strlen($string);
// echo str_replace('salom', '', $string);
// echo strrev($string);
// echo str_word_count($string)
// echo strpos($string, 'Jamol')
// ---------------------------------------------
// MATEMATIK function

// $pi = pi();
// echo $pi;
// $min = min(14,12,145,1,154);
// echo $min
// $math = abs(5.6);
// $ildiz = sqrt(81);
// $random = rand(1,100);

//--------------------------CONTSTATALAR doimiylar
// define('RANG', 'Yashil');
// define("DASTURLASH_TILI", 'php');
// echo RANG, DASTURLASH_TILI;

//----------------------OPERATORLAR
/* Arifmetik opearatorlar */
// $x =5;
// $y = 10;
// $qiymat = $x % $y;
// echo $qiymat

/*TAyinlash OPeratorlari*/

// $x =5;
// $y = 10;
// $qiymat = $x += $y;
// echo $qiymat

/* Taqqoslash opearatorlar */
// $x = 5;
// $y = 5;

// echo $x === $y
// $x = 5;
// $y = 10;
// if($x == $y and $x > $y) {
//     echo 'x teng y';
// } else{
//     echo 'teng emas';
// }


// ++$x;
// $x++;
// ---------------Array.

// ?! and ??
// $x = 'birinchi' ?? "default";
// $y = ( 1==1 ) ? 'x birga teng' : 'x hechnimaga teng';
// ---------------------------shartli statment
/* if....elseif....else */
// $x =10;
// $y = 13;

// if ($x == $y) {
//     echo "x teng y ga ";
// }elseif($x>$y){
//     echo 'x ydan katta ';
// }else{
//     echo 'x teng emas y ga ';
// }
//--------------Switch
// $rang = 'yashil';
// switch ($rang) {
//     case 'qizil':
//         echo 'rang qizilga teng';
//         break;
//     case 'yashil':
//         echo 'rang yashilga teng';
//         break;
//     default:
//         echo 'yashil rangi topilmadi';
//         break;
// }
// // ---------Sikllar
/* $x;
for ($x = 1; $x<=10; $x++){
    echo 'Ulug\'bek' .' ' . $x . ' marta ko\'ti bo\'q bo\'ldi. <br>';
    echo "Ulug'bek kotini yuvmas ekan,sharmanda" . '<br>';
}*/
// ----------------------------while
/* $x;
while($x <= 5){
    echo 'Ulugbek' .  $x . '<br>';
    $x++;
}
 */
/* --------------------ARRAY lar ucuhn LOOplar */
/* $list = ['yashil', 'qizil', 'sariq'];
foreach($list as $rang) {
    echo $rang . '<br>';
}
 *//* 
$lugat = array("Ulugbek"=>"12", "Azamat"=>"24", "Shohjahon"=>"21");

foreach($lugat as $odam=>$yosh){
    echo $odam . 'ning yoshi: ' . $yosh . "ga teng" . '<br>';
} */

//LOOPLARNI oxirgisi
/* $x =1;
do {
    echo "x teng " . $x . "<br>";
    $x++;
} while ($x<=6);
 */
     
//---------------------Function
/* 
function nimadirBajar($ism = 'Ism Topilmadi', $til = 'DAsturlash tili topilmadi'){
    echo $ism . $til . "ni biladi!" . '<br>';
}
nimadirBajar('', 'PHP');                 
nimadirBajar('Komil ', 'JAva');                 
nimadirBajar('Soli ', '');                
nimadirBajar('', 'HTML');                 
nimadirBajar('Ali ', "")                 
 */
/* function qoshish($x, $y){
    return $x+$y;
}
echo qoshish(10321312, 11231235)
 */
/* 
$ozgaruvchi = 'asdasdasd';
echo 'vardambdan oldin ';
var_dump($ozgaruvchi);
echo 'vardambdan keyin';
// die -> kodni toxtatadi
 */
//-------------Arraylar
/* 
$bir = 'btta qiymat';
$royxat = ['asas', 'asdsads', 'sdasdasd', 'asdasddas'];
$royxat1 = array('dgcvbxcxcv', 'xsdfsddds', 'cdfsfsdf',"sdfsdfsdf");
echo $royxat[0]
 */
// --------------------Superglobals
/* 
var_dump($_FILES)

 */

?>
