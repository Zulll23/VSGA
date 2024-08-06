<?php
include "koneksi.php";
$username =$_POST['username'];
$password =md5($_POST['passsword']);

$query = "select * from user where username = '$username' and password='$password'";
$result =mysqli_query($connect,$query);
$rowcount = mysqli_num_rows($result);

if ($rowcount>0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = $login;
}

if ($rowcount>0){
    echo "Anda berhasil login";
    echo "<a href='adminDashboard.html'>Admin<a/>";
}elseif($fechResult['role']=='user'){
    echo "Anda berhasil login";
    echo "<a href='userDashboard.hmtl'>User Dashboard</a>";
}
else{
    echo "Anda gagl login";
    echo "<a href='loginForm.hmtl'>Login Form</a>"
}
    mysqli close($connect);