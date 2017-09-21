<?php
	//muutujad
	$myName = "Igor";
	$myFamilyName = "Filippov";
	$picDir= "../../pics/";
	$picFiles = [];
	$picFileTypes = ["jpg", "jpeg", "png", "gif"];
	
	$allFiles = array_slice(scandir($picDir), 2);
	foreach ($allFiles as $file){
		$filetType = pathinfo($file, PATHINFO_EXTENSION);
	if (in_array($filyType, $picFileTypes) == true ) {
			array_push($picFiles, $file);
		}
	}
	
	//var_dump($allFiles);
	//$picFiles = array_slice($allFiles, 2);
	//var_dump($picFiles);
	$picFileCount = count($picFiles);
	$picNumber = mt_rand(0, $picFilesCount - 1);
	$picFile = $picFiles[$picNumber];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=”utf-8”>
	<title>Igor Filippov</title>
</head>
<body>
	<h1><?php echo $myName ." " .$myFamilyName; ?> </h1>
	<p>See veebileht on loodud oppetoo raames ning ei sisalda mingisugust tosiseltvoetavat sisu! </p>
	<img src= "<?php echo $picDir .$picFile; ?>" alt="Tallinna Ulikool">
</body>
</html>