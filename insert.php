<?php   
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'user');

     $username = $_POST['Username'];         //,'Email','Password','Confirm_Password'
     $email = $_POST['Email'];
     $password = $_POST['Password'];

     $select = "SELECT * from signup where Username = '$username'";
     $result = mysqli_query($con, $select);

     $num = mysqli_num_rows($result);

     if($num == 1){
         echo "username already exist"; 
     }else{
         $reg = " insert into signup(Username,Email,Password) values ('$username','$email','$password')";
         mysqli_query($con,$reg);
         echo "Registration Successfull";
     }

?>