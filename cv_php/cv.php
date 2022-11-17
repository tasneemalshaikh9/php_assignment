<?php require './header.php'; ?>
<?php require './created.php'; ?>
<?php
if (isset ($_POST['submit'])){
$id="id";
$name="name";
$dob="trip-start";
$photo="photo";
$email="email";
$linkedin="linkedin";
$github="github";
$country="country";
$phone="phone";
$summary="summary";
$education="education";
$university="university";
$period1="period1";
$period2="period2";
$work="work";
$project="project";
$skills="skills";
$language="language";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CV</title>
</head>
<body>
    <style>
body{background-color :rgb(185, 195, 204);}
    </style>
<form class="m-auto w-50 my-5" action="./form.php" method="post" >
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Your ID</label>
    <input type="text" name="id" class="form-control"  >
  </div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Your Name</label>
    <input type="text" class="form-control"  name="name">
  </div>
 
       <div>
          <label for="dob">Date of birth:</label>
          <input type="date" id="dob" name="trip-start" value="1999-09-25" min="1940-01-01" max="2010-12-31">
        </div>
        <br>
        <div>
        <label class="form-label" for="customFile">Uploed Your Photo</label>
        <input type="file" name="photo" class="form-control" id="customFile" />
        </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">LinkedIn</label>
    <input type="text" class="form-control" name="linkedin" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Github</label>
    <input type="text" class="form-control" name="github" aria-describedby="emailHelp">
  </div>
  <select class="form-select" name="country" aria-label="Default select example">
  <option selected>Country</option>
  <option value="Jordan">Jordan</option>
  <option value="Syria">Syria</option>
  <option value="Egybt">Egybt</option>
  <option value="Iraq">Iraq</option>
  <option value="Lebanon">Lebanon</option>
  <option value="Qatar">Qatar</option>
</select>
<br>
<div>
    <label for="phone">Phone Number</label>
 <input type="tel" name="phone" name="phone">
        </div>
        <br>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Summary</label>
    <input type="text" class="form-control" name="summary" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Education</label>
    <input type="text" class="form-control" name="education" aria-describedby="emailHelp">
  </div>
  <select class="form-select"name="university" aria-label="Default select example">
  <option selected>University</option>
  <option value="University Of Jordan">University Of Jordan</option>
  <option value="Yarmouk University">Yarmouk University</option>
  <option value="Jordan University of Science & Technology">Jordan University of Science & Technology</option>
  <option value="The World Islamic Science & Education university">The World Islamic Science & Education university</option>
  <option value="Al albayt University">Al albayt University</option>
  <option value="AL-Balqa Applied University">AL-Balqa Applied University</option>
  <option value="AL-Hussein Bin Talal University">AL-Hussein Bin Talal University</option>
  
</select>
<br>
         <div>
           <p> The study period:</p>
         <div>
          <label for="dob">From</label>
          <input type="date" name="period1" name="trip-start" >
        </div>
        <div>
          <label for="dob">TO   </label>
          <input type="date" name="period2" name="trip-start" >
        </div>
        </div>
<br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Work Experience</label>
    <input type="text" class="form-control" name="work" aria-describedby="emailHelp">
    <!-- <ol>
  <li><input type="text" class="form-control" name="work" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="work" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="work" aria-describedby="emailHelp"></li>
</ol>  -->
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Personal Projects</label>
    <input type="text" class="form-control" name="project" aria-describedby="emailHelp">
    <!-- <ol>
  <li><input type="text" class="form-control" name="project" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="project" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="project" aria-describedby="emailHelp"></li>
</ol>  -->
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Skills</label>
    <input type="text" class="form-control" name="skills" aria-describedby="emailHelp">
    <!-- <ol>
  <li><input type="text" class="form-control" name="skills" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="skills" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="skills" aria-describedby="emailHelp"></li>
</ol>  -->
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Languages</label>
    <input type="text" class="form-control" name="language" aria-describedby="emailHelp">
    <!-- <ol>
  <li><input type="text" class="form-control" name="language" aria-describedby="emailHelp"></li>
  <li><input type="text" class="form-control" name="language" aria-describedby="emailHelp"></li>
</ol>  -->
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" name="submit" class="btn btn-info">Create Your CV</button>
</form>





</body>
</html>

<?php require './footer.php'; ?>