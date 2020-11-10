<?php
    class User{
        public $Namee;
        public $Usernamee;
        public $Emaill;

        function __construct($Namee, $Usernamee, $Emaill){
            $this->name = $Namee;
            $this->uname = $Usernamee;
            $this->email = $Emaill;
        }

        function addFriend(){
            echo  $this->name, " Added a friend."; 
        }
        function postStatus(){
            echo  $this->name, " Posted a status."; 
        }
    }

    $showme = new User("Muhammad Said", "thatswhathesaid", "realchimin23@gmail.com");
    $showme->addFriend();
    echo "<br>";
    $showme->postStatus();
?>