Task num 1 :
<?php
    for($i=0; $i<16; $i++)
    {
        $year = date("Y") + $i;
        if (date("L", mktime(0, 0, 0, 1, 1, $year))) 
        {
            echo "<p>The next leap year is 29th February $year</p><br>";
            break; 
        }
    }
?>

Task num 2 :

<?php
$temp=21;
if($temp <20){
    echo "We are in winter! ";
} else echo " We are in summer!";
?>




<br>
Task num 4 :
<br>
<?php
$num1 =15;
$num2 =16;
$sum =$num1 + $num2;
if ($sum ==30){
    echo "true";
} else echo "false";
?>


<br>
Task num 5 :
<br>
<?php
$multipleOfThree=14;
if ($multipleOfThree %3 ==0){
    echo "true";
} else echo "false";
?>
<br>
Task num 6:
<br> 
<?php
$num =49;
if ($num >=20 && $num <=50){
    echo "true";
} else echo "false ";
?>

<br>
Task num 7 :
<br>
<?php
$array= array(1,5,9,6);
$max=$array[0];
foreach($array as $x){
    if ($max < $x){
        $max =$x;
    }
}
echo $max;

?>

<br> 
Task num 8 :
<br>

<?php
$unit=320;
$bill=0;
if ($unit<=50){
    $bill=$unit * 2.5;
} else if ($unit <=150){
    $bill = (50*2.5)+(($unit -50)*5);
} else if ($unit <=250){
    $bill = (50*2.5)+ (100*5) + (($unit-150)*6.2);

} else $bill = (50*2.5)+ (100*5) +(100*6.2)+ (($unit-250)*7.5);

echo" $bill JOD";
?>

<br> 
Task num 9 :
<br>
<?php
$operations ="*";
$num1 = 5;
$num2 =5;
$result = 0;
switch($operations){
    case "+":
        $result = $num1 + $num2;
      break;
      case "/":
        $result = $num1 / $num2;
      break;
      case "*":
        $result = $num1 * $num2;
      break;
      case "-":
        $result = $num1 - $num2;
      break;

}
echo $result;
?>

<br>
Task num 10 :
<br>
<?php
$age =15;
if ($age <18){
    echo "is no eligble to vote";
} else echo " Done"
?>
<br> 
Task num 11 :
<br>
<?php
$num = 1;

if ($num == 0) {
    echo "Zero";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Positive";
}
?>

<br>
Task num 12 :
<br>
<?php 
$array = array (60,86,95,63,55,74,79,62,50);
$sum = 0;
$avg=0;

$max=$array[0];
foreach($array as $x){
   $sum+= $x;
}
$avg=$sum/count($array);
echo " $avg ";
if($avg>=90){
    echo "A";
} else if ($avg>=80 && $avg<90){
    echo "B";
} else if ($avg>=70 && $avg<80){
    echo "C";
}  else if ($avg>=60 && $avg<70){
    echo "D";
} else echo "F"

?>

<br>
Task 1 :
<br>
<?php 
$string= "world ";

echo strtoupper("Hello world!");
echo "<br>";
echo strtolower("HELLO WORLD!.");
echo "<br>";
echo ucfirst("hello world!");
echo "<br>";
echo ucwords("hello world!");

?>

<br>
Task 2 :
<br>
<?php 
$timeString = "084559";
$hours =substr($timeString,0,2);
$minutes =substr($timeString ,2,2);
$seconds = substr($timeString,4,6);
$formatedTime= $hours . ':' . $minutes . ':' . $seconds;
echo $formatedTime;
?>

<br>
Task 3 :
<br>
<?php
$string = "I am a full stack developer at orange coding academy";
$word = "orange"; 
if (strpos($string,$word)!==false ){
    echo "Word found";

} else echo "Word isn't found";
?>
 <br>
 Task 4 :
 <br>
 <?php
$path = "www.orange.com/index.php";


echo basename($path) ."<br/>";


echo basename($path,".php");
?>

<br>
Task 5 :
<br>
<?php 
$email = "info@orange.com";
$parts = explode('@', $email);
$user = $parts[0]; 
echo $user;
?>


<br> 
Task 6 :
<br>
<?php
$string ="info@orange.com";
$last3Charts=substr($string,-3);
echo $last3Charts;


?>
 <br>
task 8 :  
<br>
<?php 
$string= "the new trainne is so genius  the.";
echo preg_replace('/the/','That', $string,1 );
?>
<br>
Task 9 :
<br>
<?php
function findDifference($word1, $word2) {
    $maxLength = max(strlen($word1), strlen($word2));
    $diff = '';

    for ($i = 0; $i < $maxLength; $i++) {
        $char1 = $i < strlen($word1) ? $word1[$i] : '';
        $char2 = $i < strlen($word2) ? $word2[$i] : '';

        if ($char1 !== $char2) {
            $diff .= '[' . $char1 . '/' . $char2 . ']';
        } else {
            $diff .= $char1;
        }
    }

    return $diff;
}

$word1 = "dragonball";
$word2 = "dragonboll";
echo "Difference: " . findDifference($word1, $word2);
?>


<br>
task 11 : 
<br>
<?php
function getNextLetter($inputChar) {
  
    $ascii = ord($inputChar);
    
   
    $nextAscii = $ascii + 1;
    
   
    $nextChar = chr($nextAscii);
    
    return $nextChar;
}


$inputChar = 'a';
$nextChar = getNextLetter($inputChar);

echo "The next letter after '$inputChar' is '$nextChar'.";
?>

<br> 
Task 12: 
<br>
<?php 
function insertNewString ($string, $word1 , $word2,$insert){
    $words=explode(' ',$string);
    $newWords=[];
    for($i=0; $i<count($words);$i++){
        $newWords[]=$words[$i];
        if($words[$i] ===$word1 && $words[$i+1]=== $word2){
            $newWords[]=$insert;
        }

    }
$newString=implode(' ',$newWords);
return $newString;
}
$newString=insertNewString("The brown fox","The","brown","quick");
echo $newString;
?>

<br>
Task 13:
<br>
<?php
function removeZero($string){
    $num= str_split($string);
$newString=[];
for($i=0;$i<count($num);$i++){
    if($num[$i] !='0'){
        $newString[]=$num[$i];
    }
}
$removeSpace=implode('',$newString);
    return $removeSpace;
}
$afterRemove=removeZero("000065702224.24000");
echo $afterRemove;

?>


<br>
Task 14:
<br>
<?php
function removeWord($string, $wordToRemove) {
   
    $words = explode(' ', $string);

    $newWords = [];
  
    for ($i = 0; $i < count($words); $i++) {
      
        if ($words[$i] !== $wordToRemove) {
            $newWords[] = $words[$i];
        }
    }

    $removeWord = implode(' ', $newWords);
    return $removeWord;
}

$afterRemove = removeWord("The quick brown fox jumps over the lazy dog", "fox");
echo $afterRemove; 
?>
 

<br>
Task 15:
<br>
<?php
$str = 'The quick brown fox jumps over the lazy dog---';
$trimmed_str = rtrim($str, ' -'); 
echo $trimmed_str; 

?>

<br>
Task 16:
<br>

<?php

  function RemoveSpecialChar($str) {
      $res = str_replace( array( '\'', '"',
      ',' , ';', '<', '>' ,'-','/','+','*'), '', $str);
      return $res;
      }
  $str = "\"\"1+2/23*2-3/4*3-"; 
  $str1 = RemoveSpecialChar($str); 
  echo $str1; 
?>
<br>
Task 17:
<br>
<?php
$str = "The quick brown fox jumps over the lazy dog";
$words = explode(' ', $str);
$first_five_words = implode(' ', array_slice($words, 0, 5));
echo $first_five_words; 
?>

<br>
Task 18:
<br>
<?php
  function remove($str) {
      $res1 = str_replace(',', '', $str);
      return $res1;
  }

  $str = "2,5,9,7"; 
  $str1 = remove($str); 
  echo $str1; 
?>


<br>
Task 19:
<br>
<?php
for ($i = 97; $i <= 122; $i++) {
    echo chr($i) . " ";
}
?>