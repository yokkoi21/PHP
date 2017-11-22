<?php
function addtax($price){
$price = $price * 1.08;
return $price;
}
print(addtax(900));
print(addtax(100));
print(addtax(500));
print(addtax(99999));

$a = 1;
function localtest(){
  $a = 0;
print($a+3);
}
print($a);
localtest();
?>
