<?php

    // filter_has_var and filter_var-----------------------------------

    //filter_has_var =>  Checks if variable of specified type exists
    //types =>   One of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV

    // filter_input => Gets a specific external variable by name and optionally filters it using filters

    //filter_var =>  Filters a variable with a specified filter used with SANITIZE
    //                                      and also with VALIDATE to check under filter_has_var

    // check for posted data
    if(filter_has_var(INPUT_POST,'data')){      // INPUT_GET will work with get request this will work only with post 
        echo 'Data Found';                      // data is the field name
    }else{
        echo 'data not found';
    }

    echo '<br>';

    if(filter_has_var(INPUT_POST,'data')){      
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){    // this will check weather entry is email or not
            echo 'Email Entered';
        }else{
            echo 'Email not found';
        }
    }

    echo '<br>';

    if(filter_has_var(INPUT_POST,'data')){   
        $email= $_POST['data'];        // this will reseave the the data of post request with 'data' filed name
        $email = filter_var($email, FILTER_SANITIZE_EMAIL); // this will filter out the email and 
        echo $email.'<br>';                                 // eliminate unwanter elements

        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){    // this will check weather entry is email or not
            echo 'Email Entered';
        }else{
            echo 'Email not found';
        }
    }
    
    echo '<br>';

    if(filter_has_var(INPUT_POST,'data')){      // this is same as above only change is:
        $email= $_POST['data'];        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);  
        echo $email.'<br>';                                 
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){    // we used filter_var except of filter_input to clean the 
            echo 'Email Entered';                         // code and this method is much better
        }else{
            echo 'Email not found';
        }
    }
    // if we used filter_has_var then we can check(or filter) using filter_var as shown above.

    // FILTER_VALIDATE_BOOLEAN
    // FILTER_VALIDATE_EMAIL
    // FILTER_VALIDATE_FLOAT
    // FILTER_VALIDATE_INT
    // FILTER_VALIDATE_IP
    // FILTER_VALIDATE_REGEXP  => Regular Expressions
    // FILTER_VALIDATE_URL

    // FILTER_SANITIZE_EMAIL
    // FILTER_SANITIZE_ENCODED
    // FILTER_SANITIZE_NUMBER_FLOAT
    // FILTER_SANITIZE_NUMBER_INT
    // FILTER_SANITIZE_SPECIAL_CHARS
    // FILTER_SANITIZE_STRING
    // FILTER_SANITIZE_URL

    // validation and sanitize always used with filter_var

    echo '<br><br><br>';    
    $var =54;           // this is example for validation
    if(filter_var($var, FILTER_VALIDATE_INT)){  
        echo 'Var is a number';
    }else{
        echo 'Var is not a number';
    }

    echo '<br><br><br>';

    $var = 'nhfbsf74738y582vbu47234';       // this is example for sanitization
    var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT ));

    echo '<br>';

    $var = '<script>alert(1)</script>';       // this is example for sanitization
    // echo $var;         // by doing this the $var will acts like a script 
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);   
    // by sanitizeing the special_char it will not work as script as it changes to some symbols
    // filter_input_var is greate if we are using only one field

    echo '<br><br><br>';


    // filter_input_array----------------------------------------------------

    //filter_input_array => Gets external variables and optionally filters them using filter array


    $filters = [               // this is a filters array
        'data' => FILTER_VALIDATE_EMAIL,
        'data2'=> [
            'filter'=>FILTER_VALIDATE_INT,
            'options'=>[
                'min_range' =>1,
                'max_range' =>100
            ]
        ]
    ];

    print_r(filter_input_array(INPUT_POST, $filters));

    // this is greate for multiple fileds when we are working with array

    // in above code the data on data and data2 is stored only if the conditions are right,
    // e.g: in data if email is entered then only it data is saved in data
    // and in data2: if input is number in between 1 and 100 only then the data is saved in data2
    // if conditions are not right the output will be array with null elements
    
    // filter_var_array-------------------------------------------------

    // filter_var_array => Gets multiple variables like array and optionally filters them using array

    $arr= [
        "name" => 'gursewak singh',
        "age"  => 21,
        "email"=> "xyz@ghj.com"
    ];
    $filters = [
        "name" => [
            'filter' => FILTER_CALLBACK,      // this allow us to apply a function to this value
            'options'=> "ucwords"
        ],
        'age' => [
            'filter'=>FILTER_VALIDATE_INT,
            'options'=>[
                'min_range' =>1,
                'max_range' =>100
            ]
        ],
        'email' => FILTER_VALIDATE_EMAIL
    ];
    print_r(filter_var_array($arr, $filters));


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">    <!-- PHP_SELF gives its own file location -->
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="Submit">Submit</button>
</form>