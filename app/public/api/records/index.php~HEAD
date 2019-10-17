<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// :: - for static elements
// it goes to the auto-load function -- "app > class > DbConnection.php"

// Step 2: Create & run the query
$stmt = $db->prepare('SELECT * FROM Patient');
$stmt->execute();
// in the the excute class you can specify direct results
$patients = $stmt->fetchAll();
// gives you all the row invloved; each value is a associated result

// patientGuid VARCHAR(64) PRIMARY KEY,
// firstName VARCHAR(64),
// lastName VARCHAR(64),
// dob DATE DEFAULT NULL,
// sexAtBirth CHAR(1) DEFAULT ''

// Step 3: Convert to JSON
$json = json_encode($patients, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json');
// Setting my HTTP header to JSON
echo $json;
