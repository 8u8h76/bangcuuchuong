<?php
$doc=array(1,2,3,4,5,6,7,8,9,10);
$ngang=array(1,2,3,4,5,6,7,8,9,10);
for($i=0; $i<=9; $i++)
{
?>
<table style="float:left">
<?php for($j=0;$j<=9;$j++)
{
?>
<tr>
<td>
<?php
echo "$ngang[$i] x $doc[$j] = ";
echo $doc[$j]*$ngang[$i]."<br>";
?>
</td>
</tr>
<?php
}
?>
</table>
<?php
}
?>