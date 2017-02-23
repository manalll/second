

<html>


    <head></head>
<body>

<?php



 var_dump($_POST);

/*echo $_POST['username']; 

echo $_POST['password']

.'<br/>';*/



$db = mysqli_connect('localhost', 'root', '', 'webdiplomatodoist');
if (mysqli_connect_errno()) {
    echo "Database connection is rejected. Please try agian later.";
    exit;
}

else
{
	echo "Database connection is success.".'<br/>';
}



$query = "SELECT * from user";
$results = mysqli_query($db, $query);
$rowsNumber = mysqli_num_rows($results);



    

$m=$_POST['passwd'];

$s=$_POST['email'];

$f=$_POST['firstname'];

$query = "INSERT INTO user (email,username,pass) values(?,?,?)";
$mysqlStmt = new mysqli_stmt($db, $query);
mysqli_stmt_bind_param($mysqlStmt, 'sss', $s,$f,$m);
//
echo mysqli_stmt_execute($mysqlStmt);
header('location:today.php');








?>



</body>
</html>