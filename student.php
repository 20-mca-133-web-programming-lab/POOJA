<!DOCTYPE html>
<html>
<body>
<?php
$students = array(1000,20,10000,300,1);
echo'Asort';
echo'<br>';
asort($students);
print_r($students);
echo '<br>';
echo 'Arsort';
echo '<br>';
arsort($students);
print_r($students);
?>
</body>
</html>
