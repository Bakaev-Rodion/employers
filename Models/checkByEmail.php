<?php

class checkByEmail
{
    use connection;
    private $pdo;

    public function checkEmailExistence($email){
       $this->pdo = $this->connect();
        $stmt= $this->pdo->prepare('SELECT user_email FROM users WHERE user_email=:email');
        $stmt->execute(array(':email'=>$email));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}