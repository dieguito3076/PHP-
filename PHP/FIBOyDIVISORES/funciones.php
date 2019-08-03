<?php
function fibo($limit)
{
	    $fibi=0;
	    $fibt=1;
	    $fibsum=0;
	    $condic=0;
	    echo $fibi.'<br/>';
	    echo $fibt.'<br/>';
	    for($condic=0;$condic<$limit-2;$condic++)
	    {
	        $fibsum=$fibi+$fibt;
		    echo $fibsum.'<br/>';
		    $fibi=$fibt;
		    $fibt=$fibsum;
        }
	    return; 
}
function suma($a,$b)
{
    $sum=$a+$b;
	echo 'tu resultado es'.$sum;
    return ;
}
function divi($num)
{
	$i=0;
	for($i=$num;$i>=1;$i--)
	    {
			if($num %$i==0)
			echo $i.'<br/>';    
		}
	return;
}
?>