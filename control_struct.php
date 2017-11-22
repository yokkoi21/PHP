<?php
//if文
$point = 20;
if($point >= 70){
print("合格");
}
else if($point >= 50){
print("もうちょっと");
}
else{
print("残念");
}

//switch文
$point = "A";
switch($point){
  case "A";
  print("合格");
  break;
  case "B";
  print("もうちょっと");
  break;
  case "C";
  print("残念");
  break;
}


//while文
$a = 1;
while($a < 10){
  print($a."<br/>");
  $a++;
}


//do while文
$a = 5;
do{
  print($a."<br/>");
  $a++;
}while($a < 10);


//for文
for($a = 0;$a<3;$a++){
  print($a."<br/>");
}

#foreach文
$baseball = array('鈴木'=>16,'松井'=>55,'清原'=>5);
foreach($baseball as $key => $val){//keyは連想配列のみ
  print($key.":".$val."<br/>");
}
?>
