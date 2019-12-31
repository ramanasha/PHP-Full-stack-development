<!-- <?php
function Sum( $x,$y){
  echo "this is sum function";
}
Sum();
?> -->
<!-- <?php
function Sum1( $x=16,$y=10){
  return $x+$y;
}
echo Sum1();
?> -->
<!-- <?php
$x=10;
function test(){
  global $x;
  $x=21;
  echo "global var".$x."<br/>";
}
test();
 ?> -->
 <!-- <?php
 $x=10;
 function test1(){  //local var
  $x=20;
  echo "local var".$x."<br>";
 }
 test1();
 echo "local var".$x."<br>";
  ?> -->
<!-- <?php
function test2(){
  global $y;
   $y=20;
   echo "test2-".$y."<br>";
}
  //test2();
  echo "test2-".$y."<br>";
 ?> -->

<?php //referance var &work same memory address
function addTwo(&$num){
  $num+=2;
  return $num;
}
$x=10;
echo addTwo($x)."<br>";
echo $x."<br>";
echo addTwo($x);
?>
