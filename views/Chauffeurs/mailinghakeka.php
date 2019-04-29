<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='friniskander1970@gmail.com';
											$sujet='reservation';
											$texte=$_POST['texte'];
											$header='From :  syfax@gmail.com';
											mail($to,$sujet,$texte,$header);
									     	}

									    	header('Location: mailing.php');

												?>
													
</form>
</body>
</html>