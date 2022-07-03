<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<div class="form-style-6">
<h1>Welcome</h1>
<?php
$email = $name =$lname=$gender="";
$emailErr = $nameErr = $lnameErr=$genderErr="";
$FieldRequired="This field is required!";


if($_SERVER["REQUEST_METHOD"] == "POST"){

//Checking if the fields have had been filled.
if(empty($_POST["name"]))
	$nameErr=$FieldRequired;
else
	$name=test_input($_POST["name"]);

if(empty($_POST["lastname"]))
	$lnameErr=$FieldRequired;
else
	$lname=test_input($_POST["lastname"]);

if(empty($_POST["email"]))
	$emailErr=$FieldRequired;
elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
	$emailErr="Please, enter a proper email adress.";
else
	$email=test_input($_POST["email"]);

if(empty($_POST["gender"]))
	$genderErr=$FieldRequired;
else
	$gender=test_input($_POST["gender"]);
}






//function test_input($ServerData,$input,$error){}

function test_input($data){
	return htmlspecialchars(stripslashes(trim($data)));
}

?>
Please enter your information :<br><p class=error>* fields are required</p>
<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">

Name:<span class=error>*<?=$nameErr?></span><input type="text" name="name" value="<?= $name?>"><br>
Lastname:<span class=error>*<?=$lnameErr?></span><input type="text" name="lastname" value="<?= $lname?>"><br>
E-mail:<span class=error>*<?=$emailErr?></span><input type="text" name="email" value="<?= $email?>"><br>
Gender:<span class=error>*<?=$genderErr?></span><br>
<input type="radio" name="gender" value="male" <?php if($gender=='male')echo'checked=\"checked\"';?>>Male
<input type="radio" name="gender" value="female"<?=($gender=='female')?'checked=\"checked\"':''?>>Female
<input type="radio" name="gender" value="other"<?=($gender=='other')?'checked=\"checked\"':''?>>Other<br><br>
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" &&empty($nameErr) &&empty($lnameErr) && empty($emailErr) && empty($genderErr))
{
$myfile=fopen("data.csv","a");
fwrite($myfile, $name.",".$lname.",".$gender.",".$email."\n");
echo "$name, your data has been stored!";
}

?>

</div>
</body>

</html>