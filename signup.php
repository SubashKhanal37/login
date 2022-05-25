<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
   $user_name= $_POST['username'];
   $password= $_POST['password'];

   if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name)){
 $user_id=random_num(20);

$query="insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
    mysqli_query($conn,$query);
   }
   else{
       echo "Please enter valid information";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <style type="text/css">
#text{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;

}
#button{
    padding: 10px;
    width: 100px;
    color: white;
    background-color: lightblue;
    border: none;


}
#box{
    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;
}
a{
    color: lightgreen;
    text-decoration:none;
    
}
.cent{
    display: flex;
    align-items: center;
    justify-content: center;
}



    </style>


<div id="box">
<form method="post">
    <div style="font: size 20px;margin:10px;color:white">Signup</div>
    <input id="text" type="text" name="username"><br><br>
    <input id="text" type="password" name="password"><br><br>
     <div class="cent"><input id="button" type="submit" value="Signup"><br><br></div><br>
    <div class="cent"><a href="login.php">Click to Login</a></div>

</form>

</div>
    
</body>
</html>