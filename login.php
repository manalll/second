
<html>
<head>

</head>
<body>

<?php

session_start();

 //var_dump($_POST);

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


for ($i = 0; $i < $rowsNumber; $i++) 
{
    $row = mysqli_fetch_assoc($results);
  //  echo $row['name'] . '<br />';
   // echo $row['password'] . '<br />';


    $n=$_POST ['username'];

$m=$_POST ['password'];

if ($n==$row['username'] && $m==$row['pass'] ) 

{
    
    $_SESSION['username']=$n;
    

echo "welecome". $n.'<br/>';
header('location:homme.php');


} 

else 
{
    echo "not found".$n;
   header('location:today.php');
   
   
   
}



}


/*if ($row == 1) {

$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} 

else {
$error = "Username or Password is invalid";
echo $error;
}


*/


?>

</body>
</html>