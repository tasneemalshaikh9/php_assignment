<?php
//include './insert.php';
$conn = new mysqli('localhost', 'root', '', 'students_system');
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $dob=$_POST["dob"];
    $weight=$_POST["weight"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $city=$_POST["city"];
    $color=$_POST["color"];
    $cv=$_POST["cv"];
    $query="INSERT INTO students(name,dob,weight,gender,email,phone,city,color,cv)
    VALUES('$name','$dob','$weight','$gender','$email','$phone','$city','$color','$cv')";
mysqli_query($conn,$query);
echo "<script>alert('Data Inserted Successfully!');</script>";
}
// if(mysqli_connect_errno()){
//     die("connection error". mysqli_connect_error());
// }
// echo "tasneem";
header("Location:./form.php");
?>

