<?php

    $path='/dir1/myfile.php';   

    $file='file1.txt';

    echo basename($path);           // return file name
    echo '<br>';

    echo basename($path, '.php');   // return file name without extension
    echo '<br>';

    echo dirname($path);            // return directory name from path
    echo '<br>';

    echo file_exists($file);  // it will send true or false if file is present then true other wise false bool
    echo '<br>';

    echo file_exists('file2.txt');      // bool
    echo '<br>';

    echo realpath($file);           // it is used to get absolute path
    echo '<br>';

    echo is_file($file);            // check to see if file same as file_exists   bool
    // file_exist is better as it also tells about the folder exist 
    echo '<br>'; 

    echo file_exists('test');           //    bool
    echo '<br>'; 

    echo is_writable($file);        // check if file is writeable       bool
    echo '<br>';

    echo is_readable($file);        // check if file is readable    bool
    echo '<br>';

    echo filesize($file);        // get file size   the output is in bites
    echo '<br>';


    // File manupuation ---------------------------------------------------------------------------

    echo '<br><br><br><br>';
    echo 'File Manupuation';
    echo '<br>';

    echo '<br>';
    mkdir('testing');           // create a directory

    rmdir('testing');           // this is to remove directory if its empty

    echo copy('file1.txt', 'file2.txt');    // copy file        bool if file is copied return true
    //  copy() function takes 2 parameters 
    // 1: file to be copies
    // 2:file to which to be copied or copy file name 

    rename('file2.txt', 'myfile.txt');     // rename the file
    //  rename() function takes 2 parameters 
    // 1: file to be rename
    // 2: file new name

    unlink('myfile.txt');           // delete the file

    echo '<br>';
    echo file_get_contents($file);   // file_get_contents()     read file content and save it as string

    echo '<br>';
    echo file_put_contents($file, ' Good bye World');   // put text or string in file
    // file_put_contents(file_name, Text message)
    // it will over right the existing file or replace the file
    // it return file size in bytes

    echo '<br>';
    echo file_put_contents($file, ' Hello World');      // this is to set file content as hello world


    // this is to append data to the file
    $current =file_get_contents($file);
    $current .= ' Good bye World';
    file_put_contents($file, $current);

    // file handeling----------------------------------------------------------------------------
    echo '<br><br><br><br>';
    echo 'File Handeling';
    echo '<br>';
    
    echo '<br>';
    $handle= fopen($file, 'r');     // open file for reading;   'r' satnds for read
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);

    echo '<br>';
    $handle= fopen('file2.txt', 'w');     // open file for write;   'w' satnds for read
    // if file is not present it will make a new file 
    $text = "Gursewak Singh\n";
    fwrite($handle, $text);
    $text = "Dael Singh\n";
    fwrite($handle, $text);
    fclose($handle);            // this is to close a file  

?>