<?php
	$newData = json_decode(file_get_contents("php://input"));
	print_r($newData);
	
	
	$oldData = json_decode(file_get_contents("bin/notes.json"));
	
	array_push($oldData, $newData);
	file_put_contents("bin/notes.json", json_encode($oldData, JSON_PRETTY_PRINT));
	
	//echo json_encode($oldData);