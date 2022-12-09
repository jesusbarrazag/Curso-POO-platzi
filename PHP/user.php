<?php

class User extends Account{
    public function __construct($name, $document, $email, $password){
        parent::__construct($name,$document , $email ,$password );
    }

    public function printDataUser(){
        echo "<br/>";
        echo "<br/> User";
        echo "<br/> Name: ".$this->name;
        echo "<br/> Document: ".$this->document;
        echo "<br/> E-mail: " .$this->email;
        echo "<br/> Password: " .$this->password;
        echo "<br>";
    }

}
?>