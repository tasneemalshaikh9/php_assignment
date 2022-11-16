<?php
if (isset ($_POST['submit'])){
$new_massege=array(
"id"=>$_POST['id'],
"name"=>$_POST['name'],
"dob"=>$_POST['trip-start'],
"photo"=>$_POST['photo'],
"email"=>$_POST['email'],
"linkedin"=>$_POST['linkedin'],
"github"=>$_POST['github'],
"country"=>$_POST['country'],
"phone"=>$_POST['phone'],
"summary"=>$_POST['summary'],
"education"=>$_POST['education'],
"university"=>$_POST['university'],
"period1"=>$_POST['period1'],
"period2"=>$_POST['period2'],
"work"=>$_POST['work'],
"project"=>$_POST['project'],
"skills"=>$_POST['skills'],
"language"=>$_POST['language'],
);
if (filesize("./cv.json")==0){
    $first_record=array($new_massege);
$data_to_save=$first_record;
}else{
    $old_record=json_decode(file_get_contents("./cv.json"));
    array_push($old_record,$new_massege);
    $data_to_save= $old_record;
}
if(!file_put_contents("./cv.json", json_encode($data_to_save, JSON_PRETTY_PRINT),LOCK_EX)){
    $error="Error storing massege";
}else{
    $success="Messgae is stored";
}

}
  //$yourname  =$_POST['name'];
?>


