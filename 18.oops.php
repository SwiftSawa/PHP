<?php

    class Person{

        // public:  We can acces from any where at all, even outside of the class
        // private: We can only access from this class only or the class in which it is defined
        // procted: We can use it in this class and any other class that extends this class

        private $name;
        private $email;

        private static $ageLimit=40;     // this is a static property
        // we dont need to define a static object to access static property

        // constructor is a methon that runs when object is created we can pass ans set values in this
        // this will run when ever we will create the object of class
        public function __construct($name, $email){     // __construct to declare a constructor
            $this->name =$name;
            $this->email =$email;
            // echo 'Person created';
            echo __class__.' created';          // this statement works as above statement
            // __class__ this puts the class real name in text
            echo '<br>';
        }


        // deconstructor runs to destruct the values fixed by constructor 
        // and this is initialised whhen scope of class is over
        public function __destruct(){       // __destruct to declare a distructor
            echo __class__.' destroyed';
            echo '<br>';
        }

        // methods these are of 2 types 
        // 1. Getters: custom function to get data
        // 2. Setters: custom function to set data
        public function setName($name){     // setter
            $this->name =$name;
        }
        public function getName(){          // getter
            return $this->name;     
            // this keyword is used when we want to reference something from within the class
        }

        public static function getAgeLimit(){       // static method to get age limit
            return self::$ageLimit;         // self:: syntax is used to access static property
        }
    }

    // echo Person::$ageLimit;         // here we are calling static property
    // echo '<br>';     // this does not work now as $ageLimit is private now

    echo Person::getAgeLimit();     // here we are calling static method
    echo '<br>';

    // after using static method and property we declares object of class so this shows that 
    // static method and property does not need class declaration 

    // $person1= new Person;   // here we are instantiateing the person object
    // above initialising is used when no values in constructer are passed

    $person1= new Person('Gursewak Singh', 'dael@singh.com');    // passing values for constructor

    echo $person1->getName();       
    echo '<br>';

    // $person1->setName('Gursewak Singh');        // set name as gursewak
    // echo $person1->getName();       // get name value


    // below code will work if name object is public
    // $person1->name = "Gursewak Singh";       // -> this syntax is used to access property of the class
    // echo $person1->name;


    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance)
        {
            parent::__construct($name, $email, $balance);       // this is to call parent constructor
            echo '<br>';
            echo 'A new '.__class__.' has been created';
            $this->balance=$balance;
        }

        public function setBalance($balance){    
            $this->balance =$balance;
        }
        public function getBalance(){        
            return $this->balance;    
        }
    }

    $customer1 = new Customer('Gursewak', 'swagger@singh@gmail.com', 300);
    echo '<br>';
    echo $customer1->getBalance().'<br>';  

    

?>