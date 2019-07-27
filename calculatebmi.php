<?php
$height=$_REQUEST["ht"];
$weight=$_REQUEST["wt"];
$heightInMs=$height/100;
$bmi=$weight/($heightInMs*$heightInMs);
$message="";
if($bmi<18.5)
{
	$message="You are Underweight.";
}
elseif ($bmi >=18.5 && $bmi<=24.9) {
	$message="Congrats!!! You have normal weight.";
}
elseif ($bmi>24.9 && $bmi<=29.9) 
{
	$message="You are Overweight.";
}
else
{
	$message="Be careful!!! You are Obese.";
}
$output = array(
	"bmi" => $bmi,
	"message" => $message
);
echo json_encode($output);



?>