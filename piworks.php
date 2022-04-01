<?php 

function is_divisible($number)
{
    $sum=0;
    $strNum=strval($number);
   
  
    for($i=0;$i<strlen($strNum);$i+=1)
    {
        $sum+=intval($strNum[$i]);
        
    }
    if($number%$sum==0)
    {
        return "true";
    }
else{
    return "false";

}
}

$bool=is_divisible(171);

echo $bool;
