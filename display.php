<?php
require 'functions.php';
require 'Records.php';
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$date=$_POST['date'];

echo '<h1>Registration Successful!</h1>';echo '<br>';
$pdo=connectToDb();
echo '<br>';
echo '<h2 style="font-size:22px">Our Registered Customers :</h2> ';echo '<br>';    
echo '<br>';
insert($pdo,'general_info',$_POST);



selectAll($pdo,'general_info','Records');?>
<?php
echo'<br>';
echo '<a href="form.html"><font size="12px">Submit another Response</font></a><br><br>';
?>


