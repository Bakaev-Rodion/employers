<?php
require __DIR__.'\..\connect.php';
require __DIR__.'\..\Models\checkByEmail.php';
require __DIR__.'\..\Models\addUser.php';

class addUserController
{
    public function addUser($userName,$userEmail,$userAddress,$userPhone,$departmentId,$userComments=null){
        if(!$this->checkEmail($userEmail)){
            $newUser = new addUser($userName,$userEmail,$userAddress,$userPhone,$departmentId,$userComments);
            echo 'Cool';
        }
    }
    private function checkEmail($email){
        $checker = new checkByEmail();
        if(empty($checker->checkEmailExistence($email)))
            return false;
        return true;
    }
}