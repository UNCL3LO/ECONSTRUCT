<?php
session_start();
include'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <Title>Construction Company site</title>
</head>
<body>
    <header>
    <h1>LOGIN</h1>
</header>
<?php
if(isset ($_POST['login'])){

    $user_name= $_POST['user_name'];
    $password= $_POST['password'];
    $queryUsers = mysqli_query($dbcon, "SELECT * FROM users
            WHERE user_name='$user_name' AND password='$password'");

            if (mysqli_num_rows($queryUsers)>0){
                $row=mysqli_num_rows($queryUsers);
            }
            if(isset($row))
            {
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['user_name']=$row['user_name'];
                $_SESSION['user_type']=$row['user_type'];
                $_SESSION['dob']=$row['dob'];
                $_SESSION['phone_number']=$row['phone_number'];
                $_SESSION['job_title']=$row['job_title'];

                header('location:profile.php');
            }

}
?>
    <form method="post" name='login'>
     <p>Username:<input type= "text" name="user_name"></p>
        <p>Password:<input type= 'password' name="password"></p>
        <input type ="submit" value="login" name="login"> 
        <p>New Here?<input type= "button" Value="Signup">></p>

    </form>
</body>


</html>