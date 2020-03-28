<?php

$nilai = 90;

if ($nilai < 50)
{
    echo "GRADE E";
}
 elseif ($nilai > 50 && $nilai < 60)
 {
    echo "GRADE D";
} 
elseif($nilai > 60 && $nilai < 70)
{
    echo "GRADE C"; 
} 
elseif($nilai > 70 && $nilai < 80)
{
    echo "GRADE B"; 
} 
elseif($nilai > 80 && $nilai < 90)
{
    echo "GRADE A";
} 
else {
    echo "A+";
}

?>