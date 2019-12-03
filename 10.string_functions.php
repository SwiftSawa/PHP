<?php 
    // substr()
    // return a portion of a string

    $output= substr('Hello', 1, 3);     // (string, starting_index, ending_indec)
    echo $output.'<br>';

    // strlen() for length of the string
    $output= strlen('Hello World');     
    echo $output.'<br>';
    
    // strpos() => it gives the position of first occuring element in string r.g: o
    $output= strpos('Hello World', 'o');     
    echo $output.'<br>';

    // strrpos() => it gives the position of last occuring element in string r.g: o
    $output= strrpos('Hello World', 'o');     
    echo $output.'<br>';

    // trim() => stripes white spaces or neglect white spaces
    $output= 'Hello World                      ';     
    echo $output.'<br>';
    var_dump($output);
    $output= trim('Hello World                      ');     
    echo $output.'<br>';
    var_dump($output);
    echo '<br>';

    // strtoupper() => this change the string to upper case
    $output= strtoupper('Hello World');     
    echo $output.'<br>';

    // ucwords() => capitalize the words or capital every words forst letter
    $output= ucwords('hello world');     
    echo $output.'<br>';

    // str_replace() => replace all occurences of a search string with a replacement
    $text = "Hello World";
    $output = str_replace('World', 'Everyone' , $text);  // (text_to_replace, replacement, string_action to be done)
    echo $output.'<br>';

    // is_string() => check if string'
    $val = '22';
    $output = is_string($val);
    echo $output.'<br>';

    $values = [true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0'];
    foreach($values as $value){
        echo $value.'  '.is_string($value).'<br>';
    }

    // gzcompress() => compress a string
    $string="Swagger is an open-source software framework backed by a large ecosystem of tools 
    that helps developers design, build, document, and consume RESTful web services. 
    While most users identify Swagger by the Swagger UI tool, the Swagger toolset 
    includes support for automated documentation, code generation, and test-case generation.
    Sponsored by SmartBear Software, Swagger has been a strong supporter of open-source software,
     and has widespread adoption.";

     $compressed = gzcompress($string);
     echo $compressed.'<br>';

     $origenal = gzuncompress($compressed);
     echo $origenal.'<br>';

?>