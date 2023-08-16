<?php

require_once __DIR__.'\..\..\Controllers\addUserController.php';


$user = new addUserController;
$user->addUser($_POST['userName'],$_POST['userEmail'],$_POST['userAddress'],$_POST['userPhone'],$_POST['userDepartment'],$_POST['userComments']);