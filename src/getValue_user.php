<?php 
    class retrievUserInput{
        public $uname;
        public $gender;
        public $province;
        public $email;

        public function __construct($uname, $gender,$province, $email){
            $this->uname = $uname;
            $this->gender = $gender;
            $this->province = $province;
            $this->email = $email;
        }
        public function getName(){
            return $this->uname;
        }
        public function getgender(){
            return $this->gender;
        }
        public function getProvince(){
            return $this->province;
        }
        public function getEmail(){
            return $this->email;
        }
    }