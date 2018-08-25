<?php
$arr = array(1,2,3,6,4,8);
// for ($a=0;$arr[$a]==4;$a++){
//     echo "数组的下标是".$a.",数组的值是".$arr[$a]."<br>";
// }
for ($i=0;$i<=count($arr)-1;$i++){
    if ($arr[$i]==4){
        echo  "true时数组的值是".$arr[$i]."<br>";
    }else{
       echo  "false时数组的值是".$arr[$i]."<br>";
    }
    echo "i 的值是:".$i."数组的值是".$arr[$i]."<br>";
}

?>