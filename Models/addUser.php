<?php

class addUser
{
    use connection;
    private $pdo;
    public function __construct($userName,$userEmail,$userAddress,$userPhone,$departmentId,$userComments){
        $this->pdo = $this->connect();
        $stmt= $this->pdo->prepare('INSERT INTO users(user_name,user_email,user_address,user_phone,user_comments,department_id,created_at) 
                                          VALUES (:userName, :userEmail, :userAddress,:userPhone,:userComments,:departmentId,:date)');
        return $stmt->execute(array(':userName'=>$userName,':userEmail'=>$userEmail,':userAddress'=>$userAddress,':userPhone'=>$userPhone,'userComments'=>$userComments,'departmentId'=>1,':date'=>date('Y-m-d H:i:s')));

    }
}