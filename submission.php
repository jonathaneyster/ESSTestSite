<?php

$connectstr_dbhost = '127.0.0.1';
$connectstr_dbname = 'students(esstestsite)';
$connectstr_dbusername = 'root';
$connectstr_dbpassword = 'Jonathan5';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

// define('DB_NAME', 'Students(ESSTestSite)');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'Jonathan5');
// define('DB_HOST', 'localhost');

// $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

// if(!$link){
// 	die('Could not connect: ' . mysql_error());
// }

// $db_selected = mysql_select_db(DB_NAME, $link);

// if(!$db_selected){
// 	die('Could not use ' . DB_NAME . ': ' . mysql_error());
// }

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