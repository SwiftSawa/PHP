<?php

    class Person{
        private $name;
        private $email;

        public function setData($name, $email){     
            $this->name =$name;
            $this->email =$email;
        }
        public function getData(){          
            return [
                'name'=>$this->name, 
                'email'=>$this->email];     
        }
    }

    $person1= new Person;   
    $person1->setData('Gursewak Singh', 'dael@singh.com');       
    
    echo $person1->getData()['name'];       
    echo '<br> '.$person1->getData()['email'];       
?>