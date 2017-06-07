<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	
	.popup{
		font-size: 100px;
	color: red;
		
		
	}
	
	
	</style>

</head>

<body>

<form method="post">
	<input type="url" name="input" placeholder="website url">
		<input type="text" name="paramiter" placeholder="Parameters">
		<input type="text" name="output" placeholder="Output"><br>

			<h2>Upload word list is optional </h2><br>
				<input type="file" name="file">
				

	<input type="submit" name="submit" value="submit">
</form>
<?php 
	if(isset($_POST['submit'])){
		$input =  $_POST['input'];
		$par = $_POST['paramiter'];
		$output = $_POST['output'];
				$file= $_POST['file'];


if(!empty($file)){
			$myfile = fopen("$file", "r") or die("Unable to open file!");

	while(!feof($myfile)){
		$loop= fgets($myfile);
		$website=$input.$loop.$par;
		$get=file_get_contents($website);
		if(strchr($get, "$output")){
			echo"[-]".$website." Not Found";
			echo "<br>";
		}
		else{
			echo "<br>";
		die("<h1 class='popup'>[+] ".$website." ==>Found  </h1> ");
		}	
		}
		
	}
		
	else{
		$i=1;
		while($i <= 5000){
		$looping= $i++;
		$website=$input.$looping.$par;
		$get=file_get_contents($website);
		if(strchr($get, "$output")){
			echo"[-]".$website." Not Found";
			echo "<br>";
		}
		else{
			echo "<br>";
		die("<h1 class='popup'>[+] ".$website." ==>Found  </h1> ");
		}	
		}
		
	}
		
		
		
		
	
	}
	
	
	
	?>


</body>
</html>