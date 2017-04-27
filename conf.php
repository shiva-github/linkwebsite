<?php

require_once "configuration.php";


function retrive_links(){
	$servername = host;
	$dbname = db;
	$data = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", user, pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT id, name1, link, description FROM table1"); 
		$stmt->execute();

    // set the resulting array to associative
		echo "<table border=1 class='width100'>";
		echo "<tr><th class='text-center hidden-xs-down'>ID</th><th class='text-center'>NAME</th><th class='text-center'>Link</th><th class='text-center hidden-xs-down'>Description</th></tr>";
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		foreach($stmt->fetchAll() as $v) { 
			echo "<tr>";
			foreach($v as $key=>$val){
				if($key == "link"){
					echo "<td class='text-center'><a href='$val' target='_blank'>$val</a></td>";
				}else{
					if($key == 'id' ||$key == 'description' ){
						echo "<td class='text-center hidden-xs-down'>$val</td>";
					}else{
						echo "<td class='text-center'>$val</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
	// return $data;
}
function insert($data1,$data2,$data3,$table){
	$servername = host;
	$dbname = db;

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", user, pass);
    // set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($table == 1){
			$sql = "INSERT INTO table1 (name1, link, description)
			VALUES ('$data1', '$data2', '$data3')";
		}else{
			if($table == 2){
				$sql = "INSERT INTO table2 (name1, link, description)
				VALUES ('$data1', '$data2', '$data3')";
			}else{
				if($table == 3){
					$sql = "INSERT INTO table3 (name1, link, description)
					VALUES ('$data1', '$data2', '$data3')";
				}else{
					return false;
				}
			}
		}
    // use exec() because no results are returned
		$conn->exec($sql);
		echo "<div class='temp-msg1'>New record created successfully</div>";
	}
	catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;
	return true;
}







function retrive_docs(){
	$servername = host;
	$dbname = db;
	$data = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", user, pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT id, name1, link, description FROM table2"); 
		$stmt->execute();

    // set the resulting array to associative
		echo "<table border=1 class='width100'>";
		echo "<tr><th class='text-center hidden-xs-down'>ID</th><th class='text-center'>NAME</th><th class='text-center'>Link</th><th class='text-center hidden-xs-down'>Description</th></tr>";
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		foreach($stmt->fetchAll() as $v) { 
			echo "<tr>";
			foreach($v as $key=>$val){
				if($key == "link"){
					echo "<td class='text-center'><a href='$val' target='_blank' download>$val</a></td>";
				}else{
					if($key == 'id' ||$key == 'description' ){
						echo "<td class='text-center hidden-xs-down'>$val</td>";
					}else{
						echo "<td class='text-center'>$val</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
	// return $data;
}





function retrive_uploads(){
	$servername = host;
	$dbname = db;
	$data = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", user, pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT id, name1, link, description FROM table3"); 
		$stmt->execute();

    // set the resulting array to associative
		echo "<table border=1 class='width100'>";
		echo "<tr><th class='text-center hidden-xs-down'>ID</th><th class='text-center'>NAME</th><th class='text-center'>Link</th><th class='text-center hidden-xs-down'>Description</th></tr>";
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		foreach($stmt->fetchAll() as $v) { 
			echo "<tr>";
			$namex = "";
			foreach($v as $key=>$val){
				if($key == "name1"){
					$namex = $val;
				}
				if($key == "link"){
					echo "<td class='text-center'><a href='upload/$namex' target='_blank' download>Download</a></td>";
				}else{
					if($key == 'id' ||$key == 'description' ){
						echo "<td class='text-center hidden-xs-down'>$val</td>";
					}else{
						echo "<td class='text-center'>$val</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
	// return $data;
}












?>