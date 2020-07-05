    <?php   
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'user');

     $username = $_POST['Username'];         //,'Email','Password','Confirm_Password'
     $password = $_POST['Password'];

     $select = "SELECT * from signup where Username = '$username' && Password = '$password'";
     $result = mysqli_query($con, $select);

     $num = mysqli_num_rows($result);

     if($num == 1){
         header('location:index.html');
     }else{
         header('location:login.html');
     }
?>