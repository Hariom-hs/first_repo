<!DOCTYPE html>
<html>
<body>

<?php

$num = array(8,6,9,7,4,2,3);

for($i=0;$i<=sizeof($num)-1;$i++)
{
	for($j=$i+1;$j<=sizeof($num)-1;$j++)
    {
    	if($num[$i]>$num[$j])
        {
        	$temp=$num[$i];
            $num[$i]=$num[$j];
            $num[$j]=$temp;
        }
    }
}

echo '<pre>';
print_r($num);
?> 

</body>
</html>
