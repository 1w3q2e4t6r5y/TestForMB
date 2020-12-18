

<?php

require ('Php/Validation.class.php');
require ('setter.class.php');

if(isset($_POST['submit']) || isset($_POST['button'])){
	$validations = new validationP($_POST['email'],$_POST['checkbox']);
	$errors=$validations->validateForm();
	}	

	if(isset($_POST['email']) && isset($_POST['checkbox']) && $errors['email']=='' && $errors['checkbox']==''){
		
		$setEmail = new setEmail($_POST['email']);
		$setEmail->start();
		echo '<script>window.location="../Susses.php"</script>';
	}


?>




<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	
	<title>Document</title>



</head>
<body>
	<div class="navbar">
		<img src="images/PineLogo.svg" width="3.6%" height="100%" >
		<p><span>pineapple.</span>
			<a class= "nav" href="#">About</a>
			<a class= "nav" href="#">How it works</a>
			<a class= "nav" href="#">Contact</a>
		</p>	
	
	</div>

	<div class="content">
		

		<div class="info">
			<h1>Subscribe to newsletter</h1>
			<p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
			<form action="<?php echo $_SERVER['PHP_SELF']?>"class="f-r" method="post" enctype="multipart/form-data"autocomplete="on" id='submit-form'>
			<input type="text" class="regs" id="Email"value=" Type your email address here…" name="email" />
			<button name="submit" type="submit" id="button" class="button"><img src="images/arrow.svg"></button>
			<input type="checkbox" id="checkbox" name="checkbox" checked ><label class="label">I agree <a href= "#"> to terms of service</a></label>
		</form>
		</div>

		<label class="error" id ="error" style="color:red; visibility:<?php (!$errors['email']=='')?print "visible":print "hidden";?>;">
		<?php echo $errors['email'];?>
		</label><span class="error" id="errorr" style="color:red;top:59.5%;visibility:<?php (!$errors['checkbox']=='')?print "visible":print "hidden";?>;"><?php	echo $errors['checkbox'];?></span>
		

		<div class= "logo">
			<span class = "logoImgf"><a><img src="images/FaceB.svg"  height="100%"></a></span>
			<span class = "logoImg"><a><img src="images/Inst.svg"  height="100%"></a></span>
			<span class = "logoImg"><a><img src="images/twit.svg"  height="100%"></a></span>
			<span class = "logoImg"><a><img src="images/Youtube.svg"  height="100%"></a></span>
		</div>
	
	</div>




	<div class= "img"></div>
	
	<script src="JavaSkript/Validation.js"></script>
	
</body>

</html>