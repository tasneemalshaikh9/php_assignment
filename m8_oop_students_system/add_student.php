
<?php
require_once './student.php';
require_once './db.php';

$student = new Student();
$student->create($_POST);

header("Location: ./index_oop.php");