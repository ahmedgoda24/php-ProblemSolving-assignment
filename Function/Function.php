<?php

Function searcharray($arr,$val){
for($i = 0; $i < count($arr); $i++){
    if($val==$arr[$i]){
        echo "exist";
        return true;
    }
  
}
echo "not found";
return false;
}

$search=searcharray([1,2,3,4,5,6,7,8,9],4);
echo "<br>";
var_dump($search);



function convert($number){
    if($number%2==0){
        return $number+1;
    }
    else{
       return $number+1;

    }
}
echo "<br>";
echo convert(3);
?>