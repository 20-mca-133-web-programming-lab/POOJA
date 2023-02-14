<html>
<body>
<?php
$array=array("Virat","Dhoni","Gambir","Tendulkar","Rohit");
?>
<h1>INDIAN CRICKET PLAYERS</h1>
<table border="6">
<tr>
<th>S1.No</th>
</tr>
<?php
$arraysize=sizeof($array);
for($i=0;$i<$arraysize;$i++)
{
?>
<tr>
<td><?php echo $i+1;?></td>
<td><?php echo $array[$i];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
