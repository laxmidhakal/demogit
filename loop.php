<?php 
$x=1;
do{

	$x++;
}
while ($x <= 10); {
	echo "num is". $x;
}
?>
<?php
for($x=1;$x<=10;$x++)
{
	echo " <br>".$x;
}

?>
<?php
$names=array('laxmi','binita');
foreach ($names as $name) {
	if ($name=='binita') {
	echo "the name is".$name;
	}
}
?>