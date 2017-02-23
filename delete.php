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
    
   <br><br><br><BR><BR>
    
              <?php
    $sessname=$_SESSION['username'];
echo "welecome  ".$sessname . " start to delete project ";
?>
    
    <BR><BR><BR>
    
    <form id="deleteform" method="post" action="delete.php" >
        <input type="text" name="pname" placeholder=" project name ">
        




 <input type="submit" value="delete project" >
 
  </form> 
 <?php
 
 
 
$db = mysqli_connect('localhost', 'root', '', 'webdiplomatodoist');
if (mysqli_connect_errno()) {
    echo "Database connection is rejected. Please try agian later.";
    exit;
}

 
 $name= $_POST['pname'];
   
 //echo $name;
 
// if(isset($name))
 //{
         
  $query = "delete from project where name='$name'";
  $Stmt = mysqli_query($db, $query);
  
  $rows=$db->query("select name from project");

echo "<table border='1'>";
echo "<tr><th>name of project</th></tr>";
while(list($name)=$rows->fetch_row()){
  echo "<tr><td>$name</td></tr>";
}
echo "</table>";

  
  
 //}
 
   /*  if(isset($name))
    {
   // header('location:Add.php');
  $query = "INSERT INTO project(name, user_id)VALUES('$name','$id' )";
  
  $Stmt = mysqli_query($db, $query);
  
  
  */
  
  
  /*
  
$sql="select name from project  ";
$result= mysqli_query($db, $sql);
$rowsNumber = mysqli_num_rows($result);

for ($i = 0; $i < $rowsNumber; $i++) {
$row= mysqli_fetch_assoc($result);
echo $row['name'] ;
echo '<br>';
}
  
  */
     
  //  }
 
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