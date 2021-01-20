<?php
$count = 0;
$num = 2;
echo"Prime Numbers are:";
while($count<50){
$flag = 0;
for($i = 2;$i < $num;$i++){
if($num % $i == 0){
$flag = 1;
break;
}}
if($flag == 0){
echo $num.",";
$count = $count + 1;

}
$num =$num + 1;
}

?>