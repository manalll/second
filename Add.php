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
    
     
   <!-- <a href="homme.php">home</a><br><br><br>-->
    
   <br><br><br>
    <?php
    
    $sessname=$_SESSION['username'];
    
echo "welecome  ".$sessname . " start to create project ";
?>
    <br><br><br>
    
        <form id="addform" method="post" action="Add.php" >
        <input type="text" name="pname" placeholder=" project name ">
        




 <input type="submit" value="Add project" >
 
  </form> 
  
      <?php
 

 
$db = mysqli_connect('localhost', 'root', '', 'webdiplomatodoist');
if (mysqli_connect_errno()) {
    echo "Database connection is rejected. Please try agian later.";
    exit;
}

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


echo "<br>";
$name=$_POST['pname'];


$qry="SELECT id FROM user WHERE username='$sessname'";
 $result=mysqli_query($db,$qry);
 $row= mysqli_fetch_assoc($result);
 $id=$row['id'];




 
 //echo "your ID:".$id;
 //echo "<br>";
//echo " you create project $name";
//if(mysqli_query($db,$qry)){
 

   //if(isset($name))
    //{
   // header('location:Add.php');
  $query = "INSERT INTO project(name, user_id)VALUES('$name','$id' )";
  
  $Stmt = mysqli_query($db, $query);
  
  
  

//$conn=new mysqli("localhost","root","","your_db");



 $rows=$db->query("select name from project");

echo "<table border='1'>";
echo "<tr><th>name of project</th></tr>";
while(list($name)=$rows->fetch_row()){
  echo "<tr><td>$name</td></tr>";
}
echo "</table>";

  
  
  
  
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
     
   // }
    
   // header('location:homme.php');
//mysqli_stmt_bind_param($mysqlStmt, 's',$pname);
  
 // header("location:homme.php "); 
 // mysqli_close($con);
//}
/*else 
mysqli_error($con); */
?>
         
         
          

</body>
</html>