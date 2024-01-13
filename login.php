
<!DOCTYPE html>
<html>
<head>
<title>
    صفحه ثبت نام
</title>
</head>

<style>
*{ 
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color:rgba(255, 228, 196, 0.521);
    height: 100vh;
    display: grid;
    place-items: center ;
}
form{
    position: relative;
    width: 340px;
    border-radius: 6px;
    background-color:#e4879fef;
    color:bisque;
    padding: 80px 10px 10px 10px ;
    box-shadow: 0 0 7px ;
}
form .input-group{
    position: relative;
    font-family:cursive;
    font-size: 20px;
}
form .input-group input{
    width: 100%;
    background-color:rgb(243, 234, 197);
    margin-bottom: 70px ;
    padding: 10px;
    font-size: 16px;
    border-style: solid;
   border-width: 2px;
   border-color:black;
   border-radius: 5px;
}
form .input-group label{
    position: absolute;
    font-size: 18px;
    top: -30px;
    left: 10px;
    border-radius: 2px;
}

button {
            background: rgb(212, 73, 73);
            color: #fff;
             border-radius: 7px;
            height: 40px;
            font-size: 18px;
            border: 0;
             display: block;
             margin: 0 auto;
             padding: 10px 40px ;
            cursor: pointer;
            font-family:cursive;
        }
        button:hover {
          
            cursor: pointer;
             background-color:rgb(226, 118, 118) ;
             font-family: cursive;
        }


form img{
    border-radius: 50%;
    position: absolute;
    left:70px ;
    top: -100px;
    background-position: 28px;
    padding: 10px  10px 10px 10px;
    background-size:12px;
    height: 200px;
    width: 200px;

}


</style>

<body dir="rtl">
    <form action="login.php" method="post" >
        <img src="images/m1.png" alt="icon"> 
        <div class="input-group">
            <input type="text " id="user-name" name="username">
            <label for="user-name"> user-name </label>
        </div>

        <div class="input-group">
            <input type="password" id="user-pass" name="password">
            <label for="user-pass"> password </label>
        </div>
     
        <button id="login" type="submit" >login
        </button>

    </form>

<script src="script.js">

</script>


 
</body>
</html>


<?php


$servername = "localhost:800";
$username = "root";
$password = "123";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);


if ($result && mysqli_num_rows($result) > 0) {
   
    echo "وارد شدید";
} else {
   
    echo "نام کاربری یا رمز عبور اشتباه است";
}


mysqli_close($conn);

?>