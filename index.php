<?php
$filename = '../foo.txt';

if (!file_exists($filename)) {
	
  if(isset($_POST['domain']) || $_POST['domain'] !=""){
	 
    //print"isset";
$myfile = fopen($filename, "w") or die("Unable to open file!");
$txt = $_POST['domain'];
fwrite($myfile, $txt);
fclose($myfile);	
	  
  }else{
	
	
	
  echo'
  <form action="" method="post">
  <label for="domain">Domain:</label><br>
  <input type="text" id="domain" name="domain" value=""><br>
  <input type="submit" value="Submit">
  </form>'; 
    
    //echo "The file $filename does not exist";
	exit;
  }
  //exit;
}
?>

<?php

$urlname=file_get_contents($filename);

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $urlname ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>



<div class="container">
  <div class="vertical-center">
    <h1><?php echo $urlname ?></h1>
	<p>domain #</p>
  </div>
</div>



</body>
</html>
