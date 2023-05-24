

<?php
//https://www.youtube.com/watch?v=F8Ke30Dqq0g
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

$con=new mysqli('localhost', 'root', '', 'form');

if($con){
    //echo "connection successful";
   $sql="insert into `data` (name,email,gender,mobile,password)values('$name', '$email', '$gender', '$mobile', '$password')";

   $result=mysqli_query($con, $sql);
   if($result){
    echo "Data inserted susccesfully";
   }else{
    die(mysqli_error($con));
}
}

}

?>