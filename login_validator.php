<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include 'dbh.php';
       session_start();
       $_SESSION['status']="Active";
       if(isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        // Further processing...
    }
    
             //echo "Uname : $uname Pass : $pass<br>";
            $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
                        
              $result=mysqli_query($conn, $sql);
                
            if($row = mysqli_fetch_array($result))
            {
                   
                    $_SESSION['status']="Active";
                   $_SESSION['user_id'] = $row['username'];
                   header("Location: core.php"); 
                
            }
            else
            { 
                include "index.html";
 
                
            }            
             
        ?>
    
