<?php

define('DB_NAME', 'students');
define('DB_USER', 'mysqldbuser@elevenfifty-mysqldbserver');
define('DB_PASSWORD', 'Eleven50!@1');
define('DB_HOST', 'elevenfifty-mysqldbserver.mysql.database.azure.com');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('Could not use ' . DB_NAME . ': ' . mysql_error());
}

$value_firstname = $_POST['firstname'];
$value_lastname = $_POST['lastname'];
$value_resume = $_POST['resume'];
$value_disc = $_POST['disc'];
$value_trimetrixcoaching = $_POST['trimetrixcoaching'];
$value_trimetrixgap = $_POST['trimetrixgap'];
$value_linkedin = $_POST['linkedin'];
$value_github = $_POST['github'];
$value_age = $_POST['age'];
$value_track = $_POST['track'];
$value_phonenumber = $_POST['phonenumber'];
$value_employup = $_POST['employup'];
$value_dateofemployment = $_POST['dateofemployment'];
$value_targetsalary = $_POST['targetsalary'];
$value_benefits = $_POST['benefits'];
$value_relocate = $_POST['relocate'];

$sql = "INSERT INTO students (firstname, lastname, resume, disc, trimetrixcoaching, trimetrixgap, linkedin, github, age, track, phonenumber, employup, dateofemployment, targetsalary, benefits, relocate) VALUES ('$value_firstname', '$value_lastname', '$value_resume', '$value_disc', '$value_trimetrixcoaching', '$value_trimetrixgap', '$value_linkedin', '$value_github', '$value_age', '$value_track', '$value_phonenumber', '$value_employup', '$value_dateofemployment', '$value_targetsalary', '$value_benefits', '$value_relocate')";

if (!mysql_query($sql)){
	die('Error: ' . mysql_error());
}

?>