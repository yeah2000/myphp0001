<?php
$arr = array(1,2,3,6,4,8);
// for ($a=0;$arr[$a]==4;$a++){
//     echo "������±���".$a.",�����ֵ��".$arr[$a]."<br>";
// }
for ($i=0;$i<=count($arr)-1;$i++){
    if ($arr[$i]==4){
        echo  "trueʱ�����ֵ��".$arr[$i]."<br>";
    }else{
       echo  "falseʱ�����ֵ��".$arr[$i]."<br>";
    }
    echo "i ��ֵ��:".$i."�����ֵ��".$arr[$i]."<br>";
}

?>