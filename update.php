<?php
session_start();
?>

<html>
<body>
    
    
    <div style="width: 100%;height: 70px;background-color: blueviolet;padding-top: 38">
        
        <div><p style="text-align: center;margin-top: -30px;padding-top: 18px;">php diploma</p></div>
        
         <a href="homme.php">home</a>
 
        <div><a href="logout.php" style="margin-left: 1300px;"> logout </a> </div>
        
    </div>
    
   <br><br><br><BR><BR><BR><BR>
    
           <?php
    $sessname=$_SESSION['username'];
echo "welecome  ".$sessname . " start to update project ";
?>
    
    <BR><BR><BR>
    <form id="update" method="post" action="update.php" >
        <input type="text" name="pname" placeholder=" project name ">
        <br><BR>
        <input type="text" name="ppname" placeholder=" rename project ">
        

        <BR><BR>


 <input type="submit" value="update project" >
 
  </form> 
 <?php
 
 
 
$db = mysqli_connect('localhost', 'root', '', 'webdiplomatodoist');
if (mysqli_connect_errno()) {
    echo "Database connection is rejected. Please try agian later.";
    exit;
}
// Attempt update query execution

$sql="select name from project  ";
$result= mysqli_query($db, $sql);
$rowsNumber = mysqli_num_rows($result);

for ($i = 0; $i < $rowsNumber; $i++) {
$row= mysqli_fetch_assoc($result);
echo $row['name'] ;
echo '<br>';
}

/*$results = mysqli_query($db, $query);
$rowsNumber = mysqli_num_rows($results);
//
for ($i = 0; $i < $rowsNumber; $i++) {
  $row = mysqli_fetch_assoc($results);
   echo $row['Fname'] . '<br />';
*/




$name = $_POST['pname'];
$newname=$_POST['ppname'];

if(isset($newname))
{
$sql = "UPDATE project SET name='$newname' where name='$name'";

if(mysqli_query($db, $sql)){

    echo "Records were updated successfully.";
    
    echo "<BR>";
    
    $name=$newname;
    
    
    $sql="select name from project  ";
$result= mysqli_query($db, $sql);
$rowsNumber = mysqli_num_rows($result);

for ($i = 0; $i < $rowsNumber; $i++) {
$row= mysqli_fetch_assoc($result);
echo $row['name'] ;
echo '<br>';
}

}

/*else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}*/

}
 
//mysqli_stmt_bind_param($mysqlStmt, 's',$ppname);
//
//echo mysqli_stmt_execute($mysqlStmt);
         
      /*   $query = "SELECT * from project";
$results = mysqli_query($db, $query);
$rowsNumber = mysqli_num_rows($results);
for ($i = 0; $i < $rowsNumber; $i++) {
   $row = mysqli_fetch_assoc($results);
   echo $row['name'] . '<br />';*/






         
         ?>
         
         
          

</body>
</html>