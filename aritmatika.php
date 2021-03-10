<link  rel="stylesheet"type="text/css"href="style.css">
<nav>
        <a href="index.html">Home</a> |
        <a href="cv-dian.pdf">Download</a> |
        <a href="contact.html">Contact</a> |
        <a href="about.php">About me</a>|
        <a href="login.php">Login</a> |
        <a href="fabonacci.php">fabonacci</a> |
        <a href="aritmatika.php">aritmatika</a> |
        
    </nav>
		<?php
		$a= 3;
		$b= 7;
		$n= 10;


			$beda = $b - $a;
			$output = $a + ($n - 1)* $beda;
			echo "suku ke- $n bilangan tersebut adalah $output  <br>" ;

			echo "barisan angkanya : $a $b"; 
			
			for ($i=$a; $i<=$n-1; $i++)
			{

			$output = $b + $beda;
			echo " $output";
			
			$a = $b;  
			$b = $output; 
			}
