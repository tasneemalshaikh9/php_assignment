<?php require './header.php'; ?>
<?php require './created.php'; ?>
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
  <p><b>YOUR ID:<? echo $id ?></b></p>
<div class="card my-5 w-75 m-auto" >
  <img src="<? echo $photo?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><? echo $name; ?></h5>
    <div class="card-body">
    <p class="card-text"> Date Of Birth:<? echo $dob?></p>
    <p class="card-text"> Country:<? echo $country?></p>
    <a href="#" class="card-link"><? echo $email ?> </a>
    <a href="#" class="card-link"><? echo $linkedin ?></a>
    <a href="#" class="card-link"><? echo $github ?></a>
  </div>
    <p class="card-text"> Summary:<? echo $summary?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Education:<? echo $education?></li>
    <li class="list-group-item">University:<? echo $university?><? echo $period1?> <? echo $period2?></li>
    <li class="list-group-item">Work Experience:<? echo $work?></li>
    <li class="list-group-item">Personal Projects:<? echo $project?></li>
    <li class="list-group-item">Skills:<? echo $skills?></li>
    <li class="list-group-item">Languages:<? echo $language?></li>
  </ul>
 <p class="error"><? echo @$error?></p>
 <p clas="success"><? echo @$error?></p>
</div>
</body>
</html>




<?php require './footer.php';?>