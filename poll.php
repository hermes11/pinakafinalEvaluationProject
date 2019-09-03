<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q2_option"]))
{
	$query = "
	INSERT INTO tbl_q2 
	(q2_choices) VALUES (:q2_choices)
	";
	$data = array(
		':q2_choices'		=>	$_POST["q2_option"]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q1_option"]))
{
    $query = "
    INSERT INTO tbl_q1 
    (q1_choices) VALUES (:q1_choices)
    ";
    $data = array(
        ':q1_choices'        =>  $_POST["q1_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q3_option"]))
{
    $query = "
    INSERT INTO tbl_q3 
    (q3_choices) VALUES (:q3_choices)
    ";
    $data = array(
        ':q3_choices'        =>  $_POST["q3_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q4_option"]))
{
    $query = "
    INSERT INTO tbl_q4 
    (q4_choices) VALUES (:q4_choices)
    ";
    $data = array(
        ':q4_choices'        =>  $_POST["q4_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q5_option"]))
{
    $query = "
    INSERT INTO tbl_q5 
    (q5_choices) VALUES (:q5_choices)
    ";
    $data = array(
        ':q5_choices'        =>  $_POST["q5_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q6_option"]))
{
    $query = "
    INSERT INTO tbl_q6 
    (q6_choices) VALUES (:q6_choices)
    ";
    $data = array(
        ':q6_choices'        =>  $_POST["q6_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>
<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q7_option"]))
{
    $query = "
    INSERT INTO tbl_q7 
    (q7_choices) VALUES (:q7_choices)
    ";
    $data = array(
        ':q7_choices'        =>  $_POST["q7_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>
<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q8_option"]))
{
    $query = "
    INSERT INTO tbl_q8 
    (q8_choices) VALUES (:q8_choices)
    ";
    $data = array(
        ':q8_choices'        =>  $_POST["q8_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>
<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q9_option"]))
{
    $query = "
    INSERT INTO tbl_q9 
    (q9_choices) VALUES (:q9_choices)
    ";
    $data = array(
        ':q9_choices'        =>  $_POST["q9_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>
<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q10_option"]))
{
    $query = "
    INSERT INTO tbl_q10 
    (q10_choices) VALUES (:q10_choices)
    ";
    $data = array(
        ':q10_choices'        =>  $_POST["q10_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>
<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q11_option"]))
{
    $query = "
    INSERT INTO tbl_q11 
    (q11_choices) VALUES (:q11_choices)
    ";
    $data = array(
        ':q11_choices'        =>  $_POST["q11_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>
<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q12_option"]))
{
    $query = "
    INSERT INTO tbl_q12 
    (q12_choices) VALUES (:q12_choices)
    ";
    $data = array(
        ':q12_choices'        =>  $_POST["q12_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>






