<?php
require __DIR__.'\config.php';
trait connection{
    public function connect(){
        return new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DATABASE_NAME,LOGIN,PASSWORD);
    }
}