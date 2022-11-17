<?php require './header.php'; ?>
<?php require './created.php'; ?>

<?php     
$json_data=file_get_contents("./cv.json");
$data=json_decode($json_data , true);
//  if (count($data)!=0){
 //foreach($data as $information){  }
        ?>
        <?php
// }
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
<?php foreach ($data as $information) : ?>
<p><b>YOUR ID:<?= $information['id'] ?></b></p>
<div class="card my-5 w-75 m-auto" >
  <img src="<? echo $information['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $information['name'] ?></h5>
    <div class="card-body">
    <p class="card-text"> <b>Date Of Birth:</b><?=  $information['dob']?></p>
    <p class="card-text"> <b>Country:</b><?= $information['country']?></p>
    <a href="#" class="card-link"><?=  $information['email']?> </a>
    <a href="#" class="card-link"><?= $information['linkedin']?></a>
    <a href="#" class="card-link"><?= $information['github'] ?></a>
  </div>
    <p class="card-text"><b> Summary:</b><?= $information['summary']?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Education:</b><?= $information['education']?></li>
    <li class="list-group-item"><b>University:</b><?= $information['university']?><? echo $period1?> <? echo $period2?></li>
    <li class="list-group-item"><b>Work Experience:</b><?= $information['work']?></li>
    <li class="list-group-item"><b>Personal Projects:</b><?= $information['project']?></li>
    <li class="list-group-item"><b>Skills:</b><?= $information['skills']?></li>
    <li class="list-group-item"><b>Languages:</b><?= $information['language']?></li>
  </ul>
 <p class="error"><? echo @$error?></p>
 <p clas="success"><? echo @$error?></p>
</div>
<?php endforeach; ?>



</body>
</html>




<?php require './footer.php';?>