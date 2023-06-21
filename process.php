<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$surname 		= $_POST['surname'];
	$name 		= $_POST['name'];
	$age 			= $_POST['age'];
	$contact	= $_POST['contact'];
	

		$sql = "INSERT INTO users (surname, name, age, contact) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$surname, $name, $age, $contact]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}