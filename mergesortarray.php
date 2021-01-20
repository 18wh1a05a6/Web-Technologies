<?php
$arr1 = array(7,3,4,6,1);
$arr2 = array(2,9,5,0,8);
$res = array_merge($arr1,$arr2);
rsort($res);
$len = count($res);
echo "Sorted merged list:";
for ($i = 0; $i < $len ; $i++)  {
            echo$res[$i] ."  ";
        }
?>