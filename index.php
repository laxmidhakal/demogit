<!DOCTYPE html>
<html>
<head>
	<title>basic php</title>
</head>
<body>
	<h1>
		<?php
		$names=array('laxmi','binita');
		var_dump($names);
		echo "string".$names['1'];

		?>

	</h1>
	
	 <?php
	 $name="laxmi";
	 $address="biratnagar";
	 // var_dump($name); die();
	 echo "i am"." ". $name." i am from"." ".$address;
	  ?>
	  <h2>
	  	<?php
	  	$num1=5;
	  	$num2=5;
	  	$sum=$num1+$num2;
	  	echo " Total sum is".$sum;
	  	// var_dump($sum); die();
	  	 ?>

	  </h2>
	  <h2>
	  	 <?php
	  $x=10;
	  $y=20;
	  if ($x==10 && $y==20) {
	  	echo "hello world";
	  }
	   ?>

	  </h2>

	  <h3>
	  	<?php
	  	$first_num=10.60;
	  	var_dump($first_num); die();
	  

	  	 ?>
	  </h3>
	 
	 
	 
	
</body>
</html>