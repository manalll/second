
<?php
session_start();
//var_dump($_SESSION);
?>
<html>
<head>
</head>
<body>
    
    <div style="width: 100%;height: 70px;background-color: blueviolet;padding-top: 38">
        
        <div><p style="text-align: center;margin-top: -30px;padding-top: 18px;">php diploma</p></div>
        
        
 
        <div><a href="logout.php" style="margin-left: 1300px;"> logout </a> </div>
        
    </div>
    
    <div style="margin-top: -17px; margin-left: 0px; width=10px; height: 100% ; margin-right: 1064px; background-color: blueviolet">
        

        <ul style=" margin-left: 50px; margin-top: 50px;">
            

            <br><BR><br><br><br>
           <li> <p> Projects</p></li>
        
       
           <br><BR><br><br>
        
       <!-- <input type="submit" onclick="document.getElementById('addform')".submit() >-->
        
           <li>     <a href="Add.php"> Add project</a></li>
                  
                  <br><BR><br><br>
     
                  <li> <a href="delete.php"> delete project</a></li>
        
        <br><BR><br><br>
          
          <li>  <a href="update.php"> update project</a></li>
        
                                   </ul>

    </div>
            



<?php

 
/*echo $_POST['username']; 

echo $_POST['password']

.'<br/>';*/

     /*  <?php
        
        session_start();

if($_session!=null)
{
    
  echo '  <a href="logout.php"style="margin-left: 1300px;">logout<a></div>';
    //window.location.href = "login.php";
   // header('location:login.php');
    
    
}
/*else 
{
       <a href="login.php"style="margin-left: 1300px;">login<a></div>';
}
      * 
?>
      * 
      */

    // session_start();
     if($_SESSION==null)
     {
         header('location:login.php');
     }



$db = mysqli_connect('localhost', 'root', '', 'webdiplomatodoist');
if (mysqli_connect_errno()) {
    echo "Database connection is rejected. Please try agian later.";
    exit;
}


    echo $_POST["pname"];
$query = "INSERT INTO project (name) values(?)";
$mysqlStmt = new mysqli_stmt($db, $query);
mysqli_stmt_bind_param($mysqlStmt, 's', $pname);
//
echo mysqli_stmt_execute($mysqlStmt);


?>



</body>
</html>